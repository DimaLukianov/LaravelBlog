<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CommentRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller {


    /**
     * @param CommentRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CommentRequest $request)
	{
        Auth::user()->comments()->create($request->all());

        Session::flash('success_message', 'Your comment has been added!');

        return redirect('posts/'.$request->get('post_id'));
	}


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
	{
        $post_id = $this->deleteComment($id);

        return redirect('posts/'.$post_id);
	}


    /**
     * @param $id
     * @return mixed
     */
    public function deleteComment($id)
    {
        $comment = Comment::find($id);

        $post_id = $comment->post_id;

        if ($comment->delete()) {

            Session::flash('success_message', 'Your comment has been deleted!');
            return $post_id;

        }
        return $post_id;
    }

}
