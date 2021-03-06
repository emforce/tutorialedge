<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use App\Course;
use App\Article;
use App\User;
use App\Category;

class FrontendController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::get();
        $articles = Article::orderBy('id', 'DESC')->take(8)->get();
        $artCount = Article::count();
        $userCount = User::count();
        return view('index', compact('categories', 'articles', 'artCount', 'userCount'));
	}
    
    public function single()
    {
        return view('static.proto');   
    }
    
    public function contact()
    {
        return view('static.contact');   
    }
    
    public function about()
    {
        return view('static.about');   
    }
    
    public function courseIndex()
    {
        $courses = Course::get();
        return view('course.index', compact('courses'));
    }

    public function courseSingle()
    {
        return view('course.single');   
    }
    
    public function test()
    {
        $courses = Course::get();
        $articles = Article::orderBy('id', 'DESC')->take(8)->get();
        $artCount = Article::count();
        $userCount = User::count();
        return view('newindex', compact('courses', 'articles', 'artCount', 'userCount'));
//        return view('newindex');   
    }
    
    public function search()
    {
        $articles = Article::paginate(15);
        
        return view('page.search', compact('articles'));
    }
    
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$article = Article::whereSlug($slug)->get()->first();
        $articles = DB::select(DB::raw('select * from articles where cat_id = ' . $article->cat_id . ' ORDER BY title;'));
        if(is_null($article))
        {
            return view('errors.404');  
        }
        if($article['post_status'] == "published")
        {
            
            $category = Category::where('cat_id', '=', $article->cat_id)->get()->first();
            return view('static.single', compact('article', 'articles', 'category'));
        }
        else 
        {
            return view('errors.404');  
        }
    }      
    
    public function show404()
    {
        return view('errors.404');   
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
