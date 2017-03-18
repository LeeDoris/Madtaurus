<?php

namespace App\Http\Controllers\Api;

use App\Transformers\CategoriesTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Category;

class CategoriesController extends BaseController
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
    {
        $categories = Category::all();
        return $this->response->item($categories, new CategoriesTransformer);
    }
}
