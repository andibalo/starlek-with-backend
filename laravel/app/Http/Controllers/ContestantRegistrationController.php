<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Response;
use DB;
use Mail;


class ContestantRegistrationController extends Controller
{
    //
    public function index()
    {
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.istharaChoices', compact('title', 'nav_menu'));
    }

    public function registrationGroup()
    {
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.istharaGroup', compact('title', 'nav_menu'));
    }

    public function createGroupIsthara(Request $request)
    {
        // recaptcha
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->get('recaptcha'),
            'remoteip' => $remoteip
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        if ($resultJson->success != true) {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        if ($resultJson->score >= 0.3) {
            //Validation was successful, add your form submission logic here
            return back()->with('message', 'Thanks for your message!');
        } else {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        // end 

        $data = $request->input();
        $idCard = $request->file("idCard");

        $picture = count($idCard);

        for ($i = 0; $i < $picture; $i++) {
            $idCard[$i]->store("1aOE8KhzgAI4QuIZI65q7H7XlpATx_N0L", "google");
        }

        return "oke";

        // return Http::post('https://sheet.best/api/sheets/93dcd35d-ad53-41fe-a844-fb49dfdbf1c5/tabs/Group',$data);
    }

    public function registrationSolo()
    {
        $title = "Isthara";
        $nav_menu = "isthara";

        return view('starlight2021.istharaSolo', compact('title', 'nav_menu'));
    }

    public function createSoloIsthara(Request $request)
    {

        $data = $request->input();
        return Http::post('https://sheet.best/api/sheets/93dcd35d-ad53-41fe-a844-fb49dfdbf1c5/tabs/Solo', $data);
    }

    public function welcome()
    {
        $title = "Isthara";
        $nav_menu = "isthara";
        return view('starlight2021.istharaWelcome', compact('title', 'nav_menu'));
    }

    public function complete()
    {
        $title = "Registration Complete";
        $nav_menu = "registration-complete";
        return view('starlight2021.istharaComplete', compact('title', 'nav_menu'));
    }
}
