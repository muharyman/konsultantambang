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
        return view(
            'album', 
            ['albums' => $albums]
        );
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
        $albums = Album::select('id', 'path', 'desc')->get();
        return view(
            'admin.album', 
            ['albums' => $albums]
        );
    }

    public function addform()
    {
        return view('admin.add-album');
    }

    public function editform($id)
    {
        $album = Album::select('id', 'path', 'desc')->where('id', $id)->first();
        return view(
            'admin.edit-album',
            ['album' => $album]
        );
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
                return redirect('/admin-album');
            }
            else {
                return redirect('/add-album');
            }
        }
        else {
            return redirect('/add-album');
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
                return redirect('/admin-album');
            }
            else {
                return redirect('/edit-album');
            }
        }
        else {
            return redirect('/edit-album');
        }
    }

    public function destroy($id)
    {
        Album::destroy($id);
        return redirect('/admin-album');
    }
}