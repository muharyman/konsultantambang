<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('home');
        // $articles = Article::get();
        // if (count($articles)) {
        //     return view('home');
        // }
        // else {
        //     return 0;
        // }
    }

    public function show($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->view = $article->view + 1;
            $article->save();

            return $article;
        }
        else {
            return 0;
        }
    }

    public function create(Request $request)
    {
        if ($request->hasFile('article-photo')) {
            $this->validate($request, [
                'article-photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            $image = $request->file('article-photo');
            $name = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            
            $article = new Article;
            $article->path = $name;
            $article->title = $request->input('article-title');
            $article->content = $request->input('article-content');
            $article->view = 0;
            $article->category = $request->input('article-category');
            
            if ($article->save()) {
                return 1;
            }
            else {
                return 0;
            }
        }
        else {
            return 0;
        }
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            if ($request->hasFile('article-photo')) {
                $this->validate($request, [
                    'article-photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                ]);
                
                // unlink or remove previous image from folder
                $oldImage = public_path('/images') . '/' . $article->path;
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }

                $image = $request->file('article-photo');
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);

                $article->path = $name;
            }

            $article->title = $request->input('article-title');
            $article->content = $request->input('article-content');
            $article->category = $request->input('article-category');

            if ($article->save()) {
                return 1;
            }
            else {
                return 0;
            }
        }
        else {
            return 0;
        }
    }

    public function destroy($id)
    {
        $result = Article::destroy($id);
        
        // return 1 mean successful to delete and return 0 means failed
        return $result;
    }
}