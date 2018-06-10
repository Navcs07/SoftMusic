<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->orderBy('id', 'DESC')->limit(6)->get();

        return view('web.home', compact('posts'));
    }

    public function apps()
    {
        $posts = $this->post->orderBy('id', 'DESC')->paginate(9);

        return view('web.apps', compact('posts'));
    }


    public function app($slug)
    {
        try {

            $post = $this->post->where('slug', $slug)->firstOrFail();

            return view('web.app', compact('post'));

        } catch (\Exception $exception) {

            return abort(404);
        }
    }
}
