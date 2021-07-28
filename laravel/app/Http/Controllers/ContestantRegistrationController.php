<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Response;
use DB;
use Mail;


class ContestantRegistrationController extends Controller
{
    //
    

    public function index(){
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.istharaChoices', compact('title', 'nav_menu'));
    }

    public function registrationGroup(){
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.istharaGroup', compact('title', 'nav_menu'));
    }

    public function createGroupIsthara(Request $request){
        
        $data = $request->input();
        return Http::post('https://sheet.best/api/sheets/93dcd35d-ad53-41fe-a844-fb49dfdbf1c5/tabs/Group',$data);
    }

    public function registrationSolo(){
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.istharaSolo', compact('title', 'nav_menu'));
    }

    public function createSoloIsthara(Request $request){
        
        $data = $request->input();
        return Http::post('https://sheet.best/api/sheets/93dcd35d-ad53-41fe-a844-fb49dfdbf1c5/tabs/Solo',$data);
    }

    public function welcome(){
        $title = "Isthara";
        $nav_menu = "isthara";
        return view('starlight2021.istharaWelcome', compact('title', 'nav_menu'));
    }
}