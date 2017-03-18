<?php

namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use TCG\Voyager\Models\Category;

class CategoriesTransformer extends TransformerAbstract
{
    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'parent_id' => $category->parent_id,
            'order' => $category->order,
            'name' => $category->name,
        ];
    }
}