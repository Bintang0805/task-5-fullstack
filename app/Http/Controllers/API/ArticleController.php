<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article, GetResponse $getResponse)
    {
        $articles = $article->paginate(5);

        return $getResponse->sendResponse(ArticleResource::collection($articles), 'Articles retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, GetResponse $getResponse)
    {
        $input = $request->all();

        $user_id = Auth::user()->id;

        $input['user_id'] = $user_id;

        $validator = Validator::make($input, [
            'title' => 'required|unique:articles,title',
            'content' => 'required',
            'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()){
            return $getResponse->sendError('Validation Error.', $validator->errors());
        }

        $article = Article::create($input);

        return $getResponse->sendResponse(new ArticleResource($article), 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetResponse $getResponse)
    {
        $article = Article::find($id);

        if (is_null($article)) {
            return $getResponse->sendError('Article with id = ' . $id . ' not found.');
        }

        return $getResponse->sendResponse(new ArticleResource($article), 'Article retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GetResponse $getResponse, Article $article)
    {
        $input = $request->all();

        $user_id = Auth::user()->id;

        $input['user_id'] = $user_id;

        $validator = Validator::make($input, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()){
            return $getResponse->sendError('Validation Error.', $validator->errors());
        }

        $article->update($input);

        return $getResponse->sendResponse(new ArticleResource($article), 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, GetResponse $getResponse)
    {
        $article->delete();

        return $getResponse->sendResponse([], 'Article deleted successfully.');
    }
}
