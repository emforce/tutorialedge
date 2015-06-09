<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Auth;
use App\Article;
use App\Page;
use App\User;
use App\Category;
use Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = \Auth::user();
        if($this->isAdmin())
            return view('admin.index');
        else
            return redirect('');
    }
    
    public function isAdmin()
    {
        $user = \Auth::user();
        
        if($user->type == 1)
            return true;
        else
            return false;
    }
    
    public function articles()
    {
        $articles = Article::get();
        if($this->isAdmin())
            return view('admin.articles', compact('articles'));   
        else
            return redirect('');
    }
    
    public function login()
    {
        return view('admin.login');   
    }
    
    public function pages()
    {
        $pages = Page::get();
        if($this->isAdmin())
            return view('admin.pages', compact('pages'));
        else
            return redirect('');
    }
    
    public function users()
    {
        $users = User::get();
        if($this->isAdmin())
            return view('admin.users', compact('users'));
        else
            return redirect('');
    }
    
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function addArticle()
	{
		$categories = Page::get();
        if($this->isAdmin())
            return view('admin.create', compact('categories'));
	    else
            return redirect('');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
        
        $article = new Article;
        
        $article->title = $input['title'];
        $article->body = $input['body'];
        $article->excerpt = $input['excerpt'];
        $article->published_at = time();
        $article->image_url = $input["img_url"];
        $article->slug = $input["slug"];
        $article->cat_id = 1;
        
        if($this->isAdmin())
        {
            $article->save();

            return redirect('admin/articles');
        }
        else
            return redirect('');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editArticle($slug)
	{
		//
        $article = Article::whereSlug($slug)->get()->first();
        if($this->isAdmin())
            return view('admin/edit', compact('article'));
	    else
            return redirect('');
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
        
        if($this->isAdmin())
        {
            $article->fill($input)->save();
            return redirect('admin/articles');
        } else {
            return redirect('');   
        }
	}
    
    public function destroy($slug)
    {
        $article = Article::whereSlug($slug)->get()->first();
        
        if($this->isAdmin()){
            $article->delete();

            return redirect('admin/articles');
        } else {
            return redirect('');   
        }
    }


}
