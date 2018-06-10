<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Post;
use App\Repositories\FileManagerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class PostController extends Controller
{
    private $post;

    private $category;

    private $fileManager;

    public function __construct(Post $post, Category $category, FileManagerRepository $fileManager)
    {
        $this->post        = $post;
        $this->category    = $category;
        $this->fileManager = $fileManager;
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

        $data = [
            'title'       => $request->get('title'),
            'slug'        => str_slug($request->get('title'), '-'),
            'category_id' => $request->get('category_id'),
            'content_1'   => $request->get('content_1'),
        ];

        //Save Files
        if ($request->hasFile('image'))
        {
            $image = $this->fileManager->saveImage($request->file('image'));

            $data = array_add($data, 'image_id', $image->id);
        }

        $this->post->create($data);

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
            'title'       => 'required|unique:posts,title,'.$id,
            'content_1'   => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = $this->post->findOrFail($id);

        $data = [
            'title'       => $request->get('title'),
            'slug'        => str_slug($request->get('title'), '-'),
            'category_id' => $request->get('category_id'),
            'content_1'   => $request->get('content_1'),
        ];

        if ($request->hasFile('image'))
        {
            $image = $this->fileManager->updateImage($post->image_id, $request->file('image'));

            $data = array_add($data, 'image_id', $image->id);
        }

        $post->update($data);

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

        // Remove Image
        if (! is_null($post->image_id)) {

            $this->fileManager->removeImage($post->image_id);
        }

        $post->delete();

        $message = 'Post eliminado';

        if ($request->ajax()) {

            return response()->json(['delete' => 'OK', 'message' => $message], 200);
        }

        return back();
    }
}
