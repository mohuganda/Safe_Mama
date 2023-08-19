<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\AuditTrail;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\Utils;
use App\Http\Controllers\Controller;
use App\Repositories\SharedRepo;

class PermissionController extends Controller
{
   
    private $sharedRepo;

    public function __construct(SharedRepo $sharedRepo)
    {
        $this->sharedRepo = $sharedRepo;
    }

    /*
        Renders a list of all roles
    */
    public function index(){

        $data['roles'] = Role::paginate(15);
        $data['permissions'] = Permission::all();
        return view('admin.permissions.roles')->with($data);
        
    }

    /*
        Renders a list of all users
    */
    public function users(Request $request){

        $data['roles'] = Role::all();

        $name     = $request->name;
        $locationId  = $request->location_id;
        $phone    = $request->mobile;
        $count    = (!empty($request->count))?$request->count:20;
       
      
        $users = DB::table('users')
                ->when($phone, function ($query, $phone) {
                    return $query->where('users.mobile','like',$phone.'%');
                })
                ->when($name, function ($query, $name) {
                    return $query->where('users.name','like', $name.'%');
                })
                ->when($locationId, function ($query, $locationId) {
                    return $query->where('users.location_id',$locationId);
                })
                ->when(true,function($query){ //apply access filter

                    return $this->sharedRepo->access_filter($query,true,true);
               
                })
                ->orderBy('users.id','desc')
                ->paginate($count);

        $users->appends($request->all())->links();

        $data['users']  = $users;


        $data['search'] = (object) array(
            "location"=>$locationId,
            "name"=>$name,
            "count" =>$count,
            "phone" =>$phone
        );


        return view('admin.permissions.users')->with($data);
    }

    /*
        Renders a list of all permissions
    */
    public function permissions(){
        $data['permissions'] = Permission::paginate(15);
        return view('admin.permissions.permissions')->with($data);
    }

    public function saveUser(Request $request){

        //dd($request->all());
        $user = new User();

        $lastName       = $request->last_name;
        $firstName      = $request->first_name;
        $locationId  = $request->location_id;
        $nin       = $request->nin;
        $email     = $request->email;
        $mobile    = $request->mobile;
        $roleId    = $request->role_id;
        $password  = (empty($request->pass) && !$request->id)?Str::random(6):$request->pass;
        

        if($request->id)
         $user = User::find($request->id);

        $user->firstname = $firstName;
        $user->lastname  = $lastName;
        $user->location_id  = $locationId;
        $user->mobile    = $mobile;
        $user->nin       = $nin;
        $user->email     = $email;
        $user->name      = $lastName." ".$firstName;
       
        if(!empty($password)){
          $user->password  = Hash::make($password);
          $user->pwd_changed = 0;
        }

        $saved = ($request->id)? $user->update():$user->save();

        if($saved){ //attach role
            $user->assignRole($roleId);
        }

        $msg = (!$saved)?"Operation failed, try again":"User <b> $user->name </b> created successfuly with default password <b> $password </b>";
       
        $alert_class = ($saved)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];
        return back()->with($alert);
    }

    public function changePassword(Request $request){

        if(isset($request->password)){

            $validator = $request->validate([
                'password' => 'required|min:6',
                'confirmpassword' => 'required',
            ]);

            $user = Auth::user();
            $password = $request->password;
            $confirm = $request->confirmpassword;
    
            if($password == $confirm ):

                $user->password    = Hash::make($password);
                $user->pwd_changed = 1;
                $user->update();
        
                return redirect()->route('home');
            else:
                //return redirect()->route('home');
            endif;
        }
       return view('auth.changepass');
    }

    /*
        Create roles
    */
    public function saveRole(Request $request){

        $role_name  = $request->get('role_name');
        $role_id    = $request->get('rowid'); //edits

        $role = null;
       
        if($role_id):
         $role = Role::find($role_id);
        else:
         $role = new Role();
        endif;

        $role->name =$role_name;
        $saved = $role->save();
        $msg = (!$saved)?"Operation failed, try again":"Role saved successfuly,refresh to view changes";
        $data["message"] = $msg;
        $data['data'] = ($saved)?$role:[];
        
        $alert_class = ($saved)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    /*
        Create permissions
    */
    public function createPermission(Request $request){

        $perm_name = $request->get('perm_name');
        $perm_desc = $request->get('description');
        $perm_id   = $request->get('id');

        $perm = null;
       
        if($perm_id):
         $perm = Permission::find($perm_id);
        else:
         $perm = new Permission();
        endif;
        $perm->name = $perm_name;
        $perm->description = $perm_desc;

        $saved = $perm->save();
        $msg = (!$saved)?"Operation failed, try again":"Permission saved successfuly,refresh to view changes";
        $data["message"] = $msg;
        $data['data'] = ($saved)?$perm:[];
        
        $alert_class = ($saved)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }

    /*
        Assign permissions to roles
    */
    public function permissionsToRole(Request $request){

        $roledId     = $request->get('role_id');
        $permissions = ($request->get('permissions'))?$request->get('permissions'):[];
        $role = Role::findById($roledId);
        $new_permissions= Permission::whereIn('id',$permissions)->get();
        $saved  = $role->syncPermissions($new_permissions);

        $msg = (!$saved)?"Operation failed, try again":"Assigned successfuly,refresh to view changes";
        $data["message"] = $msg;
        $data['data'] = $permissions;

        $alert_class = ($saved)?'success':'danger';

        $alert = ['alert-'.$alert_class=>$msg];

        return redirect()->route('permissions.roles')->with($alert);
    }

    /*
        Revoke permissions from roles
    */
    public function revokePermissions(Request $request){

        $roleId = $request->get('role');
        $permissions = $request->get('permissions');
        $role = Role::findById($roleId);
        $saved = false;

        foreach($permissions as $perm):
            $permission= Permission::where_in('id',$perm)->get();
            $saved = $role->revokePermissionTo($permission);
        endforeach;

        $msg = (!$saved)?"Operation failed, try again":"Revoked successfuly,refresh to view changes";
        $data["message"] = $msg;
        $data['data']    = [];

        $alert_class = ($saved)?'success':'danger';
        $alert       = ['alert-'.$alert_class=>$msg];

        return redirect()->route('permissions.roles')->with($alert);
    }

    public function roleToUser(Request $request){

        $userId = $request->user_id;
        $roleId = $request->role_id;
        $user   = User::find($userId);
        //first revoke all
        $user->syncRoles([]); 
        //assign new
        $saved  = $user->assignRole($roleId);

        $msg = (!$saved)?"Operation failed, try again":"Role assigned successfuly,refresh to view changes";
    
        $data["message"] = $msg;
        $data['data'] = [$userId,$roleId];
        $alert_class = ($saved)?'success':'danger';

        $alert = ['alert-'.$alert_class=>$msg];

        return redirect()->route('permissions.users')->with($alert);
    }

    /*
        Create roles
    */
    public function resetUser(Request $request){

        $password = Str::random(8);
        $user_id  = $request->user_id;

        $user    = User::find($user_id);
        $status  = $request->status;
        $user->status         = $status;
        $user->pwd_changed    = 0;

        if(in_array($status, [1,3])) //activating user or resetting
         $user->password      = Hash::make($password);
        
        $saved = $user->update();
    
        $msg = (!$saved)?"Operation failed, try again":"User <b> $user->name </b>, with username <b>$user->mobile or $user->email</b> has been reset with default password <b> $password </b>";
        $alert_class = ($saved)?'success':'danger';
    	
        $alert = ['alert-'.$alert_class=>$msg];
        return redirect()->route('permissions.users')->with($alert);
    }


     public function trail(Request $request){

        $userId = $request->user_id;
        $start  = $request->start;
        $end    = $request->end;
        $action = $request->action;

        $data['users'] = User::all();

        $data['search'] = (Object) $request->all();

        $data['trails'] = [];
        /*
                AuditTrail::when($userId, 
                function ($query, $userId) {
                    return $query->where('user_id', $userId);
                })
                ->when($start, 
                function ($query, $start) {
                    $start = date('Y-m-d',(strtotime('+0 day',strtotime($start))));
                    return $query->where('created_at','>=', $start);
                })
                ->when($end, 
                function ($query, $end) {
                    $end = date('Y-m-d',(strtotime('+1 day',strtotime($end))));
                    return $query->where('created_at','<=', $end);
                })
                ->when($action, 
                function ($query, $action) {
                    return $query->where('action','like', "%$action%");
                })
                ->orderBy('id','desc')->paginate(25);
                */

        return view('admin.permissions.audit')->with($data);
    }


     public function deleteUser(Request $request){

        $user_id = $request->user_id;
        $user    = User::find($user_id);
        $deleted = $user->delete();

        $msg = (!$deleted)?"Operation failed, try again":"User <b> $user->name </b>, with username <b>$user->email</b> has been  <b> deleted</b>";
        $alert_class = ($deleted)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];
        return back()->with($alert);
    }


}
