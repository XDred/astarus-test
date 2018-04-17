<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	
		$files = DB::table('files AS f')->join('users AS u', 'u.id', '=', 'f.user_id')->select('u.name AS username', 'f.name AS title', 'f.upload_time', 'f.file')->get();
	
		return view('search',['records' => $files]);
    }
}
