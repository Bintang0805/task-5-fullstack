<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryArticleResource;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class CategoryArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryArticle $categoryArticle, GetResponse $getResponse)
    {
        $categoryArticle = $categoryArticle->all();

        return $getResponse->sendResponse(CategoryArticleResource::collection($categoryArticle), "Category Articles retrieved successfully");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, GetResponse $getResponse)
    {
        $data = $request->all();

        $user_id = Auth::user()->id;

        $data['user_id'] = $user_id;

        $credentials = Validator::make($data, [
            "name" => "required",
        ]);

        if ($credentials->fails()) {
            return $getResponse->sendError("Validation error.", $credentials->errors());
        }

        $categoryArticle = CategoryArticle::create($data);

        return $getResponse->sendResponse(new CategoryArticleResource($categoryArticle), "Category Article retrieved successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetResponse $getResponse)
    {
        $categoryArticle = CategoryArticle::find($id);

        if (is_null($categoryArticle)) {
            return $getResponse->sendError("Category Article with id = " . $id . "not found");
        }

        return $getResponse->sendResponse(new CategoryArticleResource($categoryArticle), 'Article retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryArticle $categoryArticle, Request $request, GetResponse $getResponse)
    {
        $data = $request->all();

        $user_id = Auth::user()->id;

        $data['user_id'] = $user_id;

        $credentials = Validator::make($data, [
            "name" => "required",
        ]);

        if ($credentials->fails()) {
            return $getResponse->sendError("Validator errors.", $credentials->errors());
        }

        $categoryArticle->update($data);

        return $getResponse->sendResponse(new CategoryArticleResource($categoryArticle), "Category Article update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryArticle $categoryArticle , GetResponse $getResponse)
    {
        $categoryArticle->delete();

        return $getResponse->sendResponse([], 'Category Article deleted successfully.');
    }
}
