<?php
namespace App\Repositories;

use App\Jobs\SendMailJob;
use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentsRepository extends SharedRepo{

    public function get(Request $request,$approved=1){

        $rows_count = ($request->rows)?$request->rows:20;
        $incidents = Incident::orderBy('id','desc');

        if($request->term){
            $incidents->where('incident_title','like','%'.$request->term.'%');
            $incidents->orWhere('description','like','%'.$request->term.'%');
        }


        $results =  $incidents->paginate($rows_count);

        return $results;
    }

    public function save(Request $request){

        $incident = new Incident();
        $incident->subject = $request->title;
        $incident->description = $request->description;
        $incident->user_id = @current_user()->id;
       
        if($request->hasFile('image')):

            $file           = $request->file('image');  
            $file_name   = md5_file($file->getRealPath());
            $extension   = $file->guessExtension();
            $file_path   = $file_name.'.'.$extension;
           
            $file->move(storage_path().'/app/public/uploads/incidents/',$file_path);
            //$incident->incident_image     = $file_path;

        endif;

        $incident->save();
        
       
        return $incident;
    }


    public function find($id){

        return Incident::find($id);
    }

    public function delete($id){
        return Incident::find($id)->delete();
    }

    public function count(){
        return count(Incident::all());
    }


   



}
