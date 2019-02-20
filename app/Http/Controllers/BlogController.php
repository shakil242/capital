<?php

namespace App\Http\Controllers;

use FourtyTwoConnect\Coral\Models\Blog\Post;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::notNews()->published()->orderBy('published_at', 'DESC')->paginate(config('coral.blog.post.pagination'));
        return view("coral::blog.index")->with(compact("posts"));
    }
}
