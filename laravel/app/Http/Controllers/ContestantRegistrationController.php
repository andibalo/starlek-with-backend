<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use Mail;


class ContestantRegistrationController extends Controller
{
    //
    public function index(){
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.isthara', compact('title', 'nav_menu'));
    }

    public function createIsthara(Request $request){
        
        $data = $request->input();
        return Http::post('https://sheet.best/api/sheets/93dcd35d-ad53-41fe-a844-fb49dfdbf1c5')[$data];
    }

}