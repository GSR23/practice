<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function __construct()
 	    {
 				$this->beforeFilter('auth');
 				$this->beforeFilter('csrf',['only' => ['store','update']]);
 			}
	public function index()
	{
		//
		$c_index= Category::paginate(4); ;

		return	View::make('categories.categories', array('c_index' => $c_index));
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
		$validator = Validator::make(Input::all(),[
			'cat_name' => 'required|max:255',
			'cat_desc' => 'required'

		]);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
	 	}else
		{
		// return Input::all();
		// Store into database
		$c_store= new Category;
		$c_store->name = Input::get('cat_name');
		$c_store->cat_desc = Input::get('cat_desc');
		$c_store->save();

		Session::flash('success','The Category is Sucessfully Saved');
		return Redirect::route('categories.index');
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
		$c_shoe = Category::find($id);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$c_edit= x;
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
