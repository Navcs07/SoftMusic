<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class PostController extends Controller
{
    private $post;

    private $category;

    public function __construct(Post $post, Category $category)
    {
        $this->post     = $post;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->post->all();

        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->pluck('name', 'id')->toArray();

        return view('backend.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Process
        $this->validate($request,[
            'title'       => 'required|unique:posts,title',
            'content_1'   => 'required',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'required|image'
        ]);

        $this->post->create([
            'title'       => $request->get('title'),
            'slug'        => str_slug($request->get('title'), '-'),
            'category_id' => $request->get('category_id'),
            'content_1'   => $request->get('content_1'),
        ]);

        Alert::success('Post creado');

        return redirect()->route('post.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->post->findOrFail($id);

        $categories = $this->category->pluck('name', 'id')->toArray();

        return view('backend.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Process
        $this->validate($request,[
            'title'       => 'required|unique:posts,title',
            'content_1'   => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = $this->post->findOrFail($id);

        $post->update([
            'title'       => $request->get('title'),
            'slug'        => str_slug($request->get('title'), '-'),
            'category_id' => $request->get('category_id'),
            'content_1'   => $request->get('content_1'),
        ]);

        Alert::success('Post actualizado');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = $this->post->findOrFail($id);

        $post->delete();

        $message = 'Post eliminado';

        if ($request->ajax()) {

            return response()->json(['delete' => 'OK', 'message' => $message], 200);
        }

        return back();
    }
}
