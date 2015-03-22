<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CommentRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller {


	public function store(CommentRequest $request)
	{
        $comment = new Comment($request->all());

        Auth::user()->comments()->save($comment);

        return redirect('posts/'.$request->get('post_id'));
	}


	public function destroy($id)
	{
		Comment::find($id)->delete();

        return redirect()->route('posts.index');
	}

}
