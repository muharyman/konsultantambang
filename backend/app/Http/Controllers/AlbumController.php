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
        return Album::select('id', 'path', 'desc')->get();
    }

    public function show($id)
    {
        return Album::select('id', 'path', 'desc')->where('id', $id)->first();
    }

    public function create(Request $request)
    {
        return 'TBD';
    }

    public function update(Request $request, $id)
    {
        return 'TBD (idx: '.$id.')'; 
    }

    public function destroy($id)
    {
        $result = Album::destroy($id);
        
        // return 1 mean successful to delete and return 0 means failed
        return $result;
    }
}