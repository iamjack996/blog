<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Image;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'author_id', 'title', 'slug', 'content', 'imageAt', 'position'
    ];

    public function index()
    {
        $posts = Posts::all();
        return $posts;
    }

    public function store($request)
    {
        $postArray = [
            'author_id' => null,
            'title' => $request->title,
            'slug' => preg_replace('/[^A-Za-z0-9-]+/', '-', $request->slug), // String to Slug
            'content' => $request->content,
            'position' => ''
        ];
        $imageAddToArray = [];

        if ($request->hasFile('image')) {

            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // 儲存檔名, 檔案副檔名

            $imageResize = Image::make($image);                               // Resize Image
            $imageResize->resize(700, 300);
            $imageResize->response($image->getClientOriginalExtension());

            Storage::disk('local')->put('public/' . $imageName, $imageResize); // 存到本地Storage
            $imageAddToArray = [
                'imageAt' => $imageName, // config('filesystems')['disks']['local']['root']
            ];

        }

        $posts = Posts::create(array_merge($postArray, $imageAddToArray));
        return $posts;
    }
}
