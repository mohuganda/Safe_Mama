<?php

namespace App\Http\Controllers\Api;

use App\Repositories\WebinarsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebinarApiController extends Controller
{
    
    private $webinarsRepo;

    public function __construct(WebinarsRepository $webinarsRepo)
    {
        $this->webinarsRepo = $webinarsRepo;
    }

    public function index(Request $request){

        $webinars = $this->webinarsRepo->get($request);
         
        return [
            "status" => 200,
            "data"   => $webinars
        ];
    }

  
}
