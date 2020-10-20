<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $users = User::all();
        return view('posts.create', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        /* chiedere  */
        $data = $request->all();

        $request->validate([
            'title' => 'required|min:5|max:100',
            'body' => 'required|min:5|max:500',
            'user_id' => 'required|numeric|exists:users,id',
        ],
            [
                'title.required' => 'Titolo non può essere vuoto',
                'title.max' => 'Titolo non può essere più lungo di :max caratteri',
                'title.min' => 'Titolo non può essere più corto di :min caratteri',
                'body.required' => 'Il corpo del post non può essere vuoto',
                'body.max' => 'Il corpo del post non può essere più lungo di :max caratteri',
                'body.min' => 'Il corpo del post non può essere più corto di :min caratteri',
            ]
        );

        $newPost = new Post;
        $newPost->fill($data);
        $result = $newPost->save();

        /* OPPURE SCRITTO BREVEMENTE */
        /* $result = Post::create(); */

        if ($result) {

            return redirect()->route('posts.index')->with('status', $newPost->user->name);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
