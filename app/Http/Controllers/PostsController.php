<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller {


    public function __construct(){

       $this->middleware('auth', ['only' => 'create']);
    }

	public function index()
	{
        $posts = Post::latest('updated_at')->get();

		return view('posts.index', compact('posts'));
	}

	public function create()
	{
        return view('posts.create');
	}

    public function store(PostRequest $request)
	{
		$post = new Post($request->all());

        Auth::user()->posts()->save($post);

        return redirect()->route('posts.index');
	}

    public function show($id)
	{
        $post = Post::find($id);

        return view('posts.show', compact('post'));
	}


	public function edit($id)
	{
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
	}

	public function update($id, PostRequest $request)
	{
        $post = Post::find($id);

        $post->update($request->all());
        //в класі Post треба додати fillable[]
        //$post->fill($request->input())->save();
//or
//        $post->fill(['title' => $request->get('title'), 'body' => $request->get('body')])->save();
//or
//        $post->title = $request->get('title');
//        $post->body = $request->get('body');
//        $post->save();

        return redirect('posts/'.$post->id);
	}


	public function destroy($id)
	{
        $this->post->find($id)->delete();

		return redirect()->route('posts.index');
	}

}
