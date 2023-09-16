<?php

namespace App\Http\Controllers;

use App\Repositories\AreasRepository;
use App\Repositories\AuthorsRepository;
use App\Repositories\ForumsRepository;
use App\Repositories\PublicationsRepository;
use App\Repositories\QuotesRepository;
use App\Repositories\ThemesRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $publicationsRepo,$authorsRepo,$quotesRepo,$areasRepo,$forumsRepo,$themesRepo;

    public function __construct(PublicationsRepository $publicationsRepo,
    AuthorsRepository $authorsRepo, QuotesRepository $quotesRepo,
	AreasRepository $areasRepo,ForumsRepository $forumsRepo,ThemesRepository $themesRepo)
    {
        $this->publicationsRepo = $publicationsRepo;
        $this->authorsRepo      = $authorsRepo;
        $this->quotesRepo       = $quotesRepo;
		$this->areasRepo        = $areasRepo;
		$this->forumsRepo 		= $forumsRepo;
		$this->themesRepo       = $themesRepo;
    }

    public function index(Request $request){


        $request['rows']      = 10;

        $data['publications'] = $this->publicationsRepo->get($request);
        $data['recent']       = $this->publicationsRepo->get($request);
        $data['authors']      = $this->authorsRepo->get($request);
        $data['categories']   = $this->get_categories();
		$request['is_featured'] = 1;
        $data['featured']     = $this->publicationsRepo->get($request);
        $data['tags']	      = $this->publicationsRepo->get_tags();
		$data['types']        = $this->publicationsRepo->get_types();
        $data['quotes']       = $this->quotesRepo->get($request);
		$data['subthemes']	  = $this->publicationsRepo->get_subthemes();
		$data['themes']		  = $this->themesRepo->get($request,true);
        $data['is_home']      = true;

        return view('home.index',$data);
    }



	private function get_categories(){

		return array(
			[
				"title"=>"Webinars",
				"icon"=>"fa fa-heart",
				'link'=>"webinars/",
				"image"=>"health.png",
				"stats"=> $this->themesRepo->count()
			],
			[
				"title"=>"Guidelines",
				"icon"=>"fa fa-business-time",
				'link'=>"records?type=3",
				"image"=>"resource.png",
				"stats"=> $this->authorsRepo->count()
			],
			[
				"title"=>"Policies",
				"icon"=>"fa fa-map-pin",
				'link'=>"records?type=3",
				"image"=>"map.png",
				"stats"=>$this->areasRepo->count()
			],
			[
				"title"=>"Discussion Forums",
				"icon"=>"fa fa-comments",
				'link'=>"forums",
				"image"=>"forum.png",
				"stats"=>$this->forumsRepo->count()
			]
		);
	}

}
