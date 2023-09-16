<?php

namespace App\Http\Controllers;

use App\Repositories\IncidentsRepository;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    private $incidentsRepo;

    public function __construct(IncidentsRepository $incidentsRepo)
    {
        $this->incidentsRepo = $incidentsRepo;
    }

    public function index(Request $request)
    {

        $data['incidents']    = $this->incidentsRepo->get($request);
        $data['search']    = (object) $request->all();

        return view('forums.index', $data);
    }


   

    public function create(Request $request)
    {
        return view('incidents.create');
    }

   
    public function store(Request $request)
    {
        
        $saved = $this->incidentsRepo->save($request);
        $message = ($saved)?'Incident submitted successfully':'Request failed try again';

        $data['alert_class'] = ($saved)?'success':'danger';
        $data['message']     = $data['alert']= $message;
        $data['status']      = 200;

        return back()->with($data);
    }

}
