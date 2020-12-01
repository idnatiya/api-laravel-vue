<?php 

namespace App\Http\Controllers\Api; 

use App\Models\RequestLogs; 
use App\Http\Controllers\Controller; 

class RequestLogsController extends Controller
{
	/**
	 * Index 
	 * 
	 * @return void
	 */
	public function index()
	{
		return response()->json(RequestLogs::all()); 
	}
}