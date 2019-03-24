<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use App\User;
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
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * define the Category.
     *   AND
     * returns the view for this area
     */
    public function category(category $category)
    {
        $categoryName = $category->title;
        $categories = category::with('jobs')->orderby('title','asc')->get();
        $jobs = job::with('category')
            ->LatestFirst()
            ->published()
            ->where('category_id', $category->id)
            ->paginate(5);
        return view('category.index', compact('jobs', 'categories', 'categoryName'));

    }

    /**
     * define the Author.
     *   AND
     * returns the view for this area
     */
    public function author(User $author)
    {
        $authorName = $author->naem;
        $categories = category::with('jobs')->orderby('title','asc')->get();
        $jobs = job::with('category')
            ->LatestFirst()
            ->published()
            ->where('author_id', $author->id)
            ->paginate(5);
        return view('author.index', compact('jobs', 'categories', 'authorName'));

    }




}
