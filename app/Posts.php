<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'author_id', 'title', 'slug', 'content', 'imageAt', 'position'
    ];

    public function store($request)
    {
        $postArray = [
            'author_id' => null,
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'imageAt' => '',
            'position' => '',
        ];

        $posts = Posts::create($postArray);
        return $posts;
    }
}
