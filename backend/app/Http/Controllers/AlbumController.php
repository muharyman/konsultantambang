<?php

namespace App\Http\Controllers;
use App\Album;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $albums = Album::select('id', 'path', 'desc')->get();
        if (count($albums))
        {
            return $albums;
        }
        else
        {
            return 0;
        }
    }

    public function show($id)
    {
        $album = Album::select('id', 'path', 'desc')->where('id', $id)->first();
        if ($album)
        {
            return $album;
        }
        else
        {
            return 0;
        }
    }

    public function create(Request $request)
    {
        if ($request->hasFile('album-photo')) {
            $this->validate($request, [
                'album-photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            $image = $request->file('album-photo');
            $name = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            
            $content = new Album;
            $content->path = $name;
            $content->desc = $request->input('album-desc'); 
            
            if ($content->save()) {
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
        $content = Album::findOrFail($id);
        if ($content) {
            if ($request->hasFile('album-photo')) {
                $this->validate($request, [
                    'album-photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                ]);
                
                // unlink or remove previous image from folder
                $oldImage = public_path('/images') . '/' . $content->path;
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }

                $image = $request->file('album-photo');
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);

                $content->path = $name;
            }

            $content->desc = $request->input('album-desc');

            if ($content->save()) {
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
        $result = Album::destroy($id);
        
        // return 1 mean successful to delete and return 0 means failed
        return $result;
    }
}