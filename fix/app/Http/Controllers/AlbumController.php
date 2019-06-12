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
        return view('album');
        $albums = Album::select('id', 'path', 'desc')->get();
        if (count($albums)) {
            return $albums;
        }
        else {
            return 0;
        }
    }

    public function show($id)
    {
        $album = Album::select('id', 'path', 'desc')->where('id', $id)->first();
        if ($album) {
            return $album;
        }
        else {
            return 0;
        }
    }

    public function admin()
    {
        return view('admin.album');
    }

    public function addform()
    {
        return view('admin.add-album');
    }

    public function editform($id)
    {
        return view('admin.edit-album');
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
            
            $album = new Album;
            $album->path = $name;
            $album->desc = $request->input('album-desc'); 
            
            if ($album->save()) {
                return view('admin.album');
            }
            else {
                return view('admin.add-album');
            }
        }
        else {
            return view('admin.add-album');
        }
    }

    public function update(Request $request, $id)
    {
        $album = Album::find($id);
        if ($album) {
            if ($request->hasFile('album-photo')) {
                $this->validate($request, [
                    'album-photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                ]);
                
                // unlink or remove previous image from folder
                $oldImage = public_path('/images') . '/' . $album->path;
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }

                $image = $request->file('album-photo');
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);

                $album->path = $name;
            }

            $album->desc = $request->input('album-desc');

            if ($album->save()) {
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