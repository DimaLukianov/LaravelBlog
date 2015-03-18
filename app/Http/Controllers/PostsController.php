<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller {

    /**
     * @var Post
     */
    private $post;

    public function __construct(Post $post){

        $this->post = $post;
    }

	public function index()
	{
        $posts = $this->post->get();

		return view('posts.index', compact('posts'));
	}

	public function create()
	{
        return view('posts.create');
	}

	public function store(Requests\CreatePostRequest $request)
	{
		$this->post->create($request->all());

        return redirect()->route('posts.index');
	}

	public function show($id)
	{
		//$post = Post::find($id);
        $post = $this->post->find($id);

        return view('posts.show', compact('post'));
	}


	public function edit($id)
	{
        $post = $this->post->find($id);

        return view('posts.edit', compact('post'));
	}

	public function update($id, Requests\CreatePostRequest $request)
	{
        $post = $this->post->find($id);

        //в класі Post треба додати fillable[]
        $post->fill($request->input())->save();
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
