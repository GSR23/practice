<?php
// use Post;
class PostController extends \BaseController {

	public function __construct()
	    {
				$this->beforeFilter('auth',['except' =>'index']);
				$this->beforeFilter('csrf',['only' => ['store','update']]);
			}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Display Home Page
		$d_index = Post::orderBy('created_at', 'desc')->take(2)->get();    //paginate(2);
		return View::make('posts.home', array('d_index' => $d_index));
	}

	public function show_posts()
	{
		//Display all Postes
		$d_show_posts = Post::orderBy('created_at', 'desc')->paginate(4);   // (While using paginate no need of get())
		return View::make('posts.posts_show', array('d_show_posts' => $d_show_posts));

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//To Create Data
		$c_cat = Category::all();
		return View::make('posts.post_create',array('c_cat' => $c_cat));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $d_data = Input::all();
		// $d_verify = array(
		// 	'title' => 'required',
		// 	'body' => 'required'
		// );
		$validator = Validator::make(Input::all(),[
			'title' => 'required|max:255',
			'body' => 'required',
			'cat_select' =>'required|numeric'
		]);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
	 	}else
		{
		// return Input::all();
		// Store into database
		$d_store= new Post;
		$d_store->title = Input::get('title');
		// $d_store->user = Auth::user()->username;
		$d_store->body = Input::get('body');
		$d_store->category_id = Input::get('cat_select');
		$d_store->user_id = Auth::user()->id;

		$d_store->save();
		Session::flash('success','The Blog Post is Sucessfully Saved');
		return Redirect::route('blog.show',$d_store->id);
	}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Show Specific Posts
		$d_show= Post::find($id);
		// return $d_show;
		// $view = View::make('greeting')->withName('steve');
		return View::make('posts.post_show', array('d_show' => $d_show));
		// return View::make('posts.post_show')->withD_show($d_show);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//Logic to edit
		$d_edit= Post::find($id);
		return View::make('posts.post_edit', array('d_edit' => $d_edit));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//Validating Data
		$validator = Validator::make(Input::all(),[
			'title' => 'required|max:255',
			'body' => 'required'
		]);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
	 	}else{
		//Logic to Update the Data in DB
		$d_update= Post::find($id);
		$d_update->title = Input::get('title');
		$d_update->body = Input::get('body');

		$d_update->save();
		//Flashing Sucess Alert
		Session::flash('success','The Blog Post is Sucessfully Updated');
		return View::make('posts.post_show', array('d_show' => $d_update));
	}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$d_delete = Post::find($id);
		$d_delete->delete();
		Session::flash('success','The Blog Post is Sucessfully Deleted');
		return Redirect::route('blog');
	}


}
