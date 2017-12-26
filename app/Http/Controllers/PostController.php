<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * page d'accueil d'ajout des posts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('posts.add');
    }

    /**
     * page pour voir tous les posts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $posts = Posts::all();

        return view('posts.show', ['posts' => $posts]);
    }

    /**
     * ajout d'un post en ajax
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;

        $posts = new Posts;
        $posts->title = $title;
        $posts->body = $body;

        $posts->save();

        return response()->json($posts);
    }

    /**
     * ajout en PHP d'un post
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addclassic(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');

        Posts::create(['title' => $title, 'body' => $body]);

        return redirect()->route('posts.add');
    }

    /**
     * suppression des posts
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $post = new Posts();
        $post->find($id)->delete();

        return redirect()->route('posts.show');
    }
}
