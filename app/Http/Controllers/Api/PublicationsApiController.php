<?php

namespace App\Http\Controllers\Api;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Repositories\AuthorsRepository;
use App\Repositories\PublicationsRepository;
use App\Repositories\QuotesRepository;
use App\Http\Controllers\Controller;

class PublicationsApiController extends Controller
{

    private $publicationsRepo,$authorsRepo,$quotesRepo;

    public function __construct(PublicationsRepository $publicationsRepo, 
    AuthorsRepository $authorsRepo, QuotesRepository $quotesRepo){

        $this->publicationsRepo = $publicationsRepo;
        $this->authorsRepo      = $authorsRepo;
        $this->quotesRepo       = $quotesRepo;
    }
   

    /**
        * @OA\Get(
        * path="/knowhub/api/publications",
        * operationId="List Publications",
        * tags={"List Publications"},
        * summary="List Publications",
        * description="Returns a list of all publications",
        *  @OA\Parameter(
        *      name="term",
        *      in="query",
        *      required=false,
        *      description="Search term for search fro specific records",
        *      @OA\Schema(
        *           type="string"
        *      )
        *   ),
        *      @OA\Response(
        *          response=200,
        *          description="Successful",
        *          @OA\JsonContent()
        *       )
        * )
        */
    public function index(Request $request)
    {
        $publications = $this->publicationsRepo->get($request);
        return [
            "status" => 200,
            "data" => $publications
        ];
    }

   
    /**
    * @OA\Post(
    ** path="/knowhub/api/publications",
    *   tags={"Create Publication"},
    *   summary="Create Publication",
    *   operationId="CreatePublication",
    *   description="Allows users to submit publications for amdin approval",
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"cover","file_type", "sub_theme", "description","user_id"},
    *               @OA\Property(property="cover", type="file"),
    *               @OA\Property(property="file_type", type="integer"),
    *               @OA\Property(property="sub_theme", type="integer"),
    *               @OA\Property(property="title", type="string"),
    *               @OA\Property(property="description", type="string"),
    *               @OA\Property(property="author", type="integer"),
    *               @OA\Property(property="user_id", type="integer"),
    *               @OA\Property(property="link", type="string")
    *            ),
    *        ),
    *    ),
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request, when some required data is missing"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found when you send the request to an invalid endpoint"
     *   ),
     *   @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *     )
     *)
     **/
    public function store(Request $request)
    {

        $val_rules = [
            'cover'=>'required',
            'file_type'=>'required',
            'sub_theme'=>'required',
            'description'=>'required'
        ];

        $request->validate($val_rules);

        $publication = $this->publicationsRepo->save($request);

        return [
            "status" => 200,
            "data" => $publication,
            "msg" => "Publication saved successfully"
        ];
    }

    /**
        * @OA\Get(
        * path="/knowhub/api/publications/filetypes",
        * operationId="List Publications File Types",
        * tags={"List  File Types"},
        * summary="List  File Types",
        * description="Returns a list of all file types",
        *      @OA\Response(
        *          response=200,
        *          description="Successful",
        *          @OA\JsonContent()
        *       )
        * )
        */
        public function file_types()
        {
            $file_types = $this->publicationsRepo->get_types();
            return [
                "status" => 200,
                "data" => $file_types
            ];
        }

    /**
        * @OA\Get(
        * path="/knowhub/api/publications/{id}",
        * operationId="Retrieve Single Publication",
        * tags={"Retrieve Single Publication"},
        * summary="Retrieve Single Publication",
        * description="Retrieve Single Publication",
        * @OA\Parameter(
        *      name="id",
        *      in="path",
        *      required=true,
        *      description="Record Id",
        *      @OA\Schema(
        *           type="integer"
        *      )
        *   ),
        *      @OA\Response(
        *          response=200,
        *          description="Successful",
        *          @OA\JsonContent()
        *       )
        * )
        */
    public function show($publication_id)
    {
        $publication = $this->publicationsRepo->find($publication_id);
        
        return [
            "status" => 200,
            "data" =>$publication
        ];
    }


    public function update(Request $request, Publication $Publication)
    {
        $val_rules = [
            'cover'=>'required',
            'file_type'=>'required',
            'sub_theme'=>'required',
            'description'=>'required'
        ];

        $request->validate($val_rules);

        $publication = $this->publicationsRepo->save($request);

        return [
            "status" => 200,
            "data" => $publication,
            "msg" => "Publication updated successfully"
        ];
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();
        return [
            "status" => 200,
            "data" => $publication,
            "msg" => "Publication deleted successfully"
        ];
    }
}