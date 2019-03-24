<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * define the Jobs.
     *  AND
     * returns the view for this area
     */
    public function index()
    {
        $jobs = job::with('author')->LatestFirst()->published()->paginate(5);
        return view('jobs.index', compact('jobs'));
    }


    /**
     * define the Show Page.
     *   AND
     * returns the view for this area
     */
    public function show()
    {
        return view('jobs.show');
    }


    /**
     * define the Category.
     *   AND
     * returns the view for this area
     */
    public function category()
    {
        return view('category.index');
    }


    /**
     * define the Category.
     *   AND
     * returns the view for this area
     */
    public function author()
    {
        return view('author.index');
    }




}