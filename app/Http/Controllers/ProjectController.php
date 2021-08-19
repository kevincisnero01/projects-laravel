<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $projects = DB::table('projects')->get();

        return view('projects', compact('projects'));
    }
}
