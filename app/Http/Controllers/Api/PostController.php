<?php

namespace App\Http\Controllers\Api;

use App\Transformers\PostsTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $this->response->item($posts, new PostsTransformer);
    }

}
