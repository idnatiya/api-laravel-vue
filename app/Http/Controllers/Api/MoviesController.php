<?php 

namespace App\Http\Controllers\Api; 

use App\Http\Controllers\Controller; 
use App\Http\Requests\MoviesRequest; 
use App\Models\Movies; 

class MoviesController extends Controller
{
	/**
	 * Index 
	 *
	 * @return json
	 */
	public function index()
	{
		return response()->json(Movies::all()); 
	}

	/**
	 * Store 
	 * 
	 * @param  MoviesRequest $request 
	 * @return void
	 */
	public function store(MoviesRequest $request)
	{
		Movies::create($request->all()); 
	}

	/**
	 * Edit 
	 * 
	 * @param  integer 	$id 
	 * @return json
	 */
	public function edit($id)
	{
		return response()->json(Movies::findOrFail($id)); 
	}

	/**
	 * Update 
	 * 
	 * @param  	integer        	$id     
	 * @param  	MoviesRequest 	$request 
	 * @return 	void
	 */
	public function update($id, MoviesRequest $request)
	{
		Movies::findOrFail($id)->update($request->all()); 
	}

	/**
	 * Destroy 
	 *
	 * @param  	integer $id     
	 * @return void
	 */
	public function destroy($id)
	{
		Movies::findOrFail($id)->delete(); 
	}
}