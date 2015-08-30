<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Course;
use App\Article;
use Request;

class CourseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::orderBy('id', 'DESC')->paginate(9);
        return view('admin/Courses/index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$courses = Course::get();
        return view('admin/Courses/create', compact('courses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $course = new Course;
        $input = Request::all();
        $course->fill($input)->save();
        return redirect('admin/Courses');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$course = Course::whereSlug($slug)->get()->first();
        $articles = DB::select(DB::raw('select * from articles where course_id = ' . $course->id . ';'));
        return view('page.index', compact('articles', 'course'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
        $page = Article::whereSlug($slug)->get()->first();
        return view('admin/Courses/edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		$article = Article::whereSlug($slug)->get()->first();
        $input = Request::all();
        $article->fill($input)->save();
        return redirect('admin/Courses/' . $slug . '/edit');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		$page = Page::whereSlug($slug)->get()->first();
        $page->delete();
        return redirect('admin/Courses');
	}

}
