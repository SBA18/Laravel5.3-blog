<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{

    /**
     * index returns all post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $title = "Breaking news";
        $posts = Post::published()->with('category')->get();
        return view('posts.index',['title' => $title], compact('posts'));
    }

    /**
     * Create new post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $title = "Create new article";
        return view('posts.create', ['title' => $title]);
    }

    /**
     * Show single post
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){
        $post = Post::published()->where('id', $id)->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Search by title
     * @param $q
     */
    public function searchByTitle($q){
        $post = Post::published()->searchByTitle($q)->get();
    }

    /**
     * Edit Post
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $title = "Edit Post";
        //$categories = Category::list('name', 'id');
        $post = Post::findOrFail($id);
        return view('posts.edit', ['title' => $title], compact('post', 'categories'));
    }

    /**
     * Update Post
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect(route('news.index'));
    }

    /**
     * Store Updated post
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $post = Post::create($request->all());
        return redirect(route('news.index'));
    }
}
