<?php

namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use TCG\Voyager\Models\Post;

class PostsTransformer extends TransformerAbstract
{
    public function transform(Post $post)
    {
        return [
            'id' => $post->id,
            'author_id' => $post->author_id,
            'category_id' => $post->category_id,
            'title' => $post->title,
            'seo_title' => $post->seo_title,
            'excerpt' => $post->excerpt,
            'body' => $post->body,
            'image' => $post->image,
            'slug' => $post->slug,
            'meta_description' => $post->meta_description,
            'meta_keywords' => $post->meta_keywords,
            'status' => $post->status,
            'updated_at' => $post->updated_at,
        ];
    }
}