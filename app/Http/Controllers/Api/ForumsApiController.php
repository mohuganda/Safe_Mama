<?php

namespace App\Http\Controllers\Api;

use App\Repositories\ForumsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumsApiController extends Controller
{
    private $forumsRepo;

    public function __construct(ForumsRepository $forumsRepo)
    {
        $this->forumsRepo = $forumsRepo;
    }

    public function index(Request $request)
    {

        $fourms   = $this->forumsRepo->get($request);

        return [
            "status" => 200,
            "data"   => $fourms
        ];
    }


    public function join(Request $request)
    {
        
        $this->forumsRepo->join_forum($request);

        return [
            "status" => 200,
            "data"   => (Object) ['message'=>'Successfully joined']
        ];
    }

    

    public function comment(Request $request)
    {
        $this->forumsRepo->save_comment($request);

        return [
            "status" => 200,
            "data"   => (Object) ['message'=>'Successfully added']
        ];
    }

  

}
