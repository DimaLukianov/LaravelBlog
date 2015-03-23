<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller {


    public function __construct(){

       $this->middleware('auth', ['only' => 'create']);
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
        $posts = Post::latest('updated_at')->get();

		return view('posts.index', compact('posts'));
	}


    /**
     * @return \Illuminate\View\View
     */
    public function create()
	{
        $tags = Tag::lists('name', 'id');

        return view('posts.create', compact('tags'));
	}


    /**
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
	{
        $this->createPost($request);

        Session::flash('success_message', 'Your post has been created!');

        return redirect()->route('posts.index');
	}


    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
	{
        $post = Post::find($id);

        return view('posts.show', compact('post'));
	}


    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
	{
        $post = Post::find($id);

        $tags = Tag::lists('name', 'id');

        return view('posts.edit', compact('post', 'tags'));
	}


    /**
     * @param $id
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, PostRequest $request)
	{
        $post = Post::find($id);

        $post->update($request->all());

        $this->syncTags($post, $request->input('tag_list'));

        return redirect('posts/'.$post->id);
	}


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
	{
        Post::find($id)->delete();

        Session::flash('success_message', 'Your post has been deleted!');

		return redirect()->route('posts.index');
	}


    /**
     * @param $post
     * @param array $tags
     * @internal param PostRequest $request
     */
    private function syncTags($post, array $tags)
    {
        $post->tags()->sync($tags);
    }


    /**
     * Save a new post.
     *
     * @param PostRequest $request
     */
    private function createPost(PostRequest $request)
    {
        $post = Auth::user()->posts()->create($request->all());

        $this->syncTags($post, $request->input('tag_list'));

        return $post;
    }

}
