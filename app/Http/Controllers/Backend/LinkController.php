<?php

namespace App\Http\Controllers\Backend;

use App\Models\Link;
use App\Models\Post;
use App\Repositories\FileManagerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class LinkController extends Controller
{
    private $link;

    private $fileManager;

    public function __construct(Link $link, FileManagerRepository $fileManager)
    {
        $this->link = $link;
        $this->fileManager = $fileManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $links = $post->links;

        return view('backend.link.index', compact('post', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('backend.link.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        //Process
        $this->validate($request,[
            'name' => 'required',
            //'link' => 'required',
        ]);

        $this->link->create([
            'name'    => $request->get('name'),
            'link'    => ($request->hasFile('file')) ? $this->fileManager->saveFile($request->file('file')) : $request->get('link'),
            'post_id' => $post->id,
            'type'    => ($request->hasFile('file')) ? 'local' : 'externo',
        ]);

        Alert::success('Enlace creado');

        return redirect()->route('link.index', [$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $link = $this->link->findOrFail($id);

        return view('backend.link.edit', compact('link', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Post $post
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, $id)
    {
        //Process
        $this->validate($request,[
            'name' => 'required',
            'link' => 'required',
        ]);

        $link = $this->link->findOrFail($id);

        $link->update($request->all());

        Alert::success('Enlace actualizado');

        return redirect()->route('link.index', [$post]);
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
        $link = $this->link->findOrFail($id);

        $this->fileManager->deleteFile($link);

        $link->delete();

        $message = 'Enlace eliminado';

        if ($request->ajax()) {

            return response()->json(['delete' => 'OK', 'message' => $message], 200);
        }

        return back();
    }
}
