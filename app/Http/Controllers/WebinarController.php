<?php

namespace App\Http\Controllers;

use App\Repositories\WebinarsRepository;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    
    private $webinarsRepo;

    public function __construct(WebinarsRepository $webinarsRepo)
    {
        $this->webinarsRepo = $webinarsRepo;
    }

    public function index(Request $request){

        $data['webinars'] = $this->webinarsRepo->get($request);
        return view('webinars.index',$data);
    }

  
}
