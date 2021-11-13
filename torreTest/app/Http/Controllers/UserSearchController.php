<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserSearchRequest;

class UserSearchController extends Controller
{
    public function index(UserSearchRequest $request)
    {
      
        $username = $request->input('username');
        $response = Http::get('https://torre.bio/api/bios/' . $username);
        $data = json_decode($response, true);
        if( isset($data['code']) ){
            Session::flash('error', 'User not Found');
            return redirect()->back();
        }

        return view('pages.profile', compact('data'));

    }
    
        
    
}
