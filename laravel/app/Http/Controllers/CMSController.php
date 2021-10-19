<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Response;
use DB;
use Mail;

class CMSController extends Controller
{
    public function home()
    {
        $title = "Home";
        $nav_menu = 'home';

        return view('starlight2021.home', compact('title', 'nav_menu'));
    }

    public function aboutus()
    {
        $title = "About";
        $nav_menu = "aboutus";

        return view('cms.aboutus', compact('title', 'nav_menu'));
    }

    public function committee()
    {
        $title = "Committee";
        $nav_menu = "committee";

        return view('cms.committee', compact('title', 'nav_menu'));
    }

    public function contact()
    {
        $title = "Contact";
        $nav_menu = "contact";

        return view('cms.contact', compact('title', 'nav_menu'));
    }

    public function event()
    {
        $title = "Event";
        $nav_menu = "event";

        return view('cms.event', compact('title', 'nav_menu'));
    }

    public function announcement()
    {
        $title = "Announcement of Sirius";
        $nav_menu = "announcement";

        return view('cms.announcement', compact('title', 'nav_menu'));
    }

    public function homenew()
    {
        $title = "Home";
        $nav_menu = 'home';

        return view('starlight2021.home', compact('title', 'nav_menu'));
    }

    public function aboutusnew()
    {
        $title = "About";
        $nav_menu = "aboutus";

        return view('starlight2021.about', compact('title', 'nav_menu'));
    }

    public function recruitment()
    {
        $title = "Recruitment";
        $nav_menu = "announcement";

        return view('starlight2021.recruitment', compact('title', 'nav_menu'));
    }

    public function faq()
    {
        $title = "FAQ";
        $nav_menu = "faq";

        return view('starlight2021.faq', compact('title', 'nav_menu'));
    }

    public function citymap()
    {
        $title = "City Map";
        $nav_menu = "citymap";

        return view('starlight2021.city', compact('title', 'nav_menu'));
    }

    public function regisContestant()
    {
        $title = "Contestant Form";
        $nav_menu = "regis";

        return view('starlight2021.regis', compact('title', 'nav_menu'));
    }

    public function judge()
    {
        $title = "Judge";
        $nav_menu = "Judge";

        return view('starlight2021.judge', compact('title', 'nav_menu'));
    }

    public function starbook()
    {
        $title = "About - Starbook";
        $nav_menu = "starbook";

        return view('starlight2021.about-starbook', compact('title', 'nav_menu'));
    }

    public function pick()
    {
        $title = "PICK - Starbook";
        $nav_menu = "starbook";

        return view('starlight2021.pick', compact('title', 'nav_menu'));
    }

    public function isthara()
    {
        $dataJSON = Http::get("https://sheet.best/api/sheets/31734eb2-83de-4f1a-ab96-a795f77fb406/tabs/Data")->json();
        $dataIsthara = collect($dataJSON);

        $title = "PICK - Starbook";
        $nav_menu = "starbook";

        return view('starlight2021.istharaScore', [
            'title' => $title,
            'nav_menu' => $nav_menu,
            'data' => $dataIsthara
        ]);
    }

    public function istharaScoring(Request $request)
    {
        //dd($request->input());
        $transformedData = [];

        $judgeCode = $request->judge;
        switch ($judgeCode) {
            case "JDZ01":
                $judgeName = "Wanda-Omar";
            case "JDZ02":
                $judgeName = "Vellania-Suganda";
            case "JDZ03":
                $judgeName = "Abraham-Gustavito";
            default:
                $judgeName = "CORVUS";
        }

        $app = app();
        for ($i = 0; $i <= 14; $i++) {
            $peserta = $app->make('stdClass');
            $peserta->peserta = $request->namaIsthara[$i];
            $peserta->penguasaanSkill = $request->penguasaanSkill[$i];
            $peserta->Konsep = $request->konsep[$i];
            $peserta->Kreativitas = $request->kreativitas[$i];
            $peserta->Kostum = $request->kostum[$i];

            array_push($transformedData, $peserta);
        }

        Http::post('https://sheet.best/api/sheets/31734eb2-83de-4f1a-ab96-a795f77fb406/tabs/' . $judgeName, $transformedData);

        // buat view berhasil.
        $title = "Judge";
        $nav_menu = "Judge";

        return view('starlight2021.judge', compact('title', 'nav_menu'));
    }


    public function istharaThanks()
    {

        $title = "Thank You - Starbook";
        $nav_menu = "starbook";

        return view('starlight2021.judgeThanks', compact('title', 'nav_menu'));
    }
    
}
