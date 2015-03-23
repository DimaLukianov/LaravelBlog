<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TagsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
	public function index()
	{
		$tags = Tag::latest('updated_at')->get();

        return view('tags.index', compact('tags'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
	public function create()
	{
        return view('tags.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function store(TagRequest $request)
	{
        Tag::create($request->input());

        Session::flash('success_message', 'Tag has been created!');

        return redirect()->route('tags.index');
	}

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\View\View
     * @internal param int $id
     */
	public function show($id)
	{
        $tag = Tag::find($id);

        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\View\View
     * @internal param Tag $tag
     * @internal param int $id
     */
	public function edit($id)
	{
        $tag = Tag::find($id);

        return view('tags.edit', compact('tag'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param TagRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function update($id, TagRequest $request)
	{
        $tag = Tag::find($id);

        $tag->update($request->all());

        Session::flash('success_message', 'Tag has been successfully updated!');

        return redirect('tags/'.$tag->id);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
	public function destroy($id)
	{
        Tag::find($id)->delete();

        Session::flash('success_message', 'Tag has been deleted!');

        return redirect()->route('tags.index');
	}

}
