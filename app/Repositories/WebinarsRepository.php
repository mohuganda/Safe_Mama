<?php
namespace App\Repositories;

use App\Models\Author;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarsRepository extends SharedRepo{

    public function get(Request $request){

        $rows_count = ($request->rows)?$request->rows:24;
        $webinars = Webinar::orderBy('webinar_date','desc');

        if($request->term){
            
            $webinars->where('title','like','%'.$request->term.'%');
            $webinars->orWhere('description','like','%'.$request->term.'%');
        }

        $result = $webinars ->paginate($rows_count);

        return  $result;
    }
    
    public function save($name){
        
        $webinar = new Webinar();
        $webinar->title = $name;
        $webinar->save();

        return $webinar;
    }

    public function find($id){

        return Webinar::find($id);
    }

    public function delete($id){

        return Webinar::find($id)->delete();
    }

    public function count(){
        return count(Webinar::all());
    }


}