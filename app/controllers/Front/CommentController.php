<?php namespace Front;

use \Response;
use \Input;
use \Comment;

class CommentController extends \BaseController
{

    protected $comments = null;

    public function __construct(\CommentsService $cs)
    {
        $this->comments = $cs;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $article_id = Input::get('article_id');
        $comments = Comment::where('article_id', $article_id)->get();
        return Response::json($comments);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $article_id = Input::get('article_id');
		$author = Input::get('author');
        $body = Input::get('body');
        $id = $this->comments->add($article_id, $author, $body);
        return Response::json($id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
