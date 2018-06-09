<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->paginate();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'name'       => 'required|max:50',
            'email'      => 'required|email|max:60|unique:users,email',
            'password'   => 'required|string|min:6|confirmed',
        ]);

        $user = $this->user->create($request->all());

        Alert::success(trans('User create'));

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->findOrFail($id);

        return view('user.edit', compact('user'));
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
            'name'       => 'required|max:50',
            'email'      => 'required|email|max:60|unique:users,email,'. $id
        ]);

        $user = $this->user->findOrFail($id);

        $user->update($request->all());

        Alert::success(trans('User edit'));

        return redirect()->route('user.index');
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
        $user = $this->user->findOrFail($id);

        $user->delete();

        $message = 'User delete';

        if ($request->ajax()) {

            return response()->json(['delete' => 'OK', 'message' => $message], 200);
        }

        return back();
    }
}
