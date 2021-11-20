<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Response;
use DB;
use Mail;

use function GuzzleHttp\json_encode;

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

    public function isthara($nama)
    {
        $dataJSON = Http::get("https://sheet.best/api/sheets/bcba5d83-906a-4626-9522-96b8afee68e3/tabs/Rising" . $nama)->json();
        $dataIsthara = collect($dataJSON);
        //dd($dataIsthara);

        // $dataIsthara = [
        //     0 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "FelasVegas"
        //     ],
        //     1 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "ArchietaAditya"
        //     ],
        //     2 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "AurelliaGraciaLusi"
        //     ],
        //     3 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "BryanZen"
        //     ],
        //     4 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "ChikaMegan"
        //     ],
        //     5 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "FadlyAli"
        //     ],
        //     6 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "GraciellaOlivia"
        //     ],
        //     7 => [
        //         0 => "https://drive.google.com/uc?export=view&id=1M1h0dQt7TsIodL1xO6CY1y0qweldCMVf",
        //         1 => "ROBERTTAN"
        //     ]
        // ];

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
            case "RSWD08":
                $judgeName = "Wanda-Omar";
                break;
            case "RSVL08":
                $judgeName = "Vellania-Suganda";
                break;
            case "RSAG08":
                $judgeName = "Abraham-Gustavito";
                break;
            case "RSRQ08":
                $judgeName = "Rifqi-Fitriyansah";
                break;
            case "RSDN08":
                $judgeName = "Dandy-Hendstyo";
                break;
            default:
                $judgeName = "CORVUS";
                break;
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

        Http::post('https://sheet.best/api/sheets/bcba5d83-906a-4626-9522-96b8afee68e3/tabs/' . $judgeName, $transformedData);

        // buat view berhasil.
        $title = "Judge";
        $nav_menu = "Judge";

        return view('starlight2021.judgeThanks', compact('title', 'nav_menu'));
    }

    public function NEWistharaScoring(Request $request)
    {
        // dd($request->input());

        $judgeCode = $request->judge;
        switch ($judgeCode) {
            case "RSWD08":
                $judgeName = "Wanda-Omar";
                break;
            case "RSVL08":
                $judgeName = "Vellania-Suganda";
                break;
            case "RSAG08":
                $judgeName = "Abraham-Gustavito";
                break;
            case "RSRQ08":
                $judgeName = "Rifqi-Fitriyansah";
                break;
            case "RSDN08":
                $judgeName = "Dandy-Hendstyo";
                break;
            default:
                $judgeName = "CORVUS";
                break;
        }


        $sbAPI = 'https://sheet.best/api/sheets/bcba5d83-906a-4626-9522-96b8afee68e3/tabs/' . $judgeName . '/peserta';
        $sbAPI .= "/" . $request->namaIsthara;

        $sbAPI2 = 'https://sheet.best/api/sheets/bcba5d83-906a-4626-9522-96b8afee68e3/tabs/Rising' . $judgeName . '/peserta';
        $sbAPI2 .= "/" . $request->namaIsthara;

        // Http::post('https://sheet.best/api/sheets/bcba5d83-906a-4626-9522-96b8afee68e3/tabs/' . $judgeName, $transformedData);
        Http::patch($sbAPI2, ['status' => 'terisi']);

        Http::patch($sbAPI, [
            'penguasaanSkill' => $request->penguasaanSkill,
            'Konsep' => $request->konsep,
            'Kreativitas' => $request->kreativitas,
            'Kostum' => $request->kostum
        ]);

        // buat view berhasil.
        $title = "Judge";
        $nav_menu = "Judge";

        return back();
    }


    public function istharaThanks()
    {
        $title = "Thank You - Starbook";
        $nav_menu = "starbook";

        return view('starlight2021.judgeThanks', compact('title', 'nav_menu'));
    }

    public function voting()
    {
        $title = "Voting - Starbook";
        $nav_menu = "Voting";

        $dataJSON = Http::get("https://sheet.best/api/sheets/259b6aff-3c82-4ca1-8f3f-61c32272bf1a/tabs/dataIsthara")->json();
        $dataIsthara = collect($dataJSON);

        return view('starlight2021.voting', [
            'title' => $title,
            'nav_menu' => $nav_menu,
            'data' => $dataIsthara
        ]);
    }

    public function votingIsthara(Request $request)
    {
        $email = $request->input('email');
        $istharaName = $request->input('istharaName');
        $totalVote = $request->input('totalVote');

        // update voters flag HasVoted
        Http::patch('https://sheet.best/api/sheets/259b6aff-3c82-4ca1-8f3f-61c32272bf1a/tabs/hasilVote/Email/' . $email, [
            'Vote' => $istharaName,
            'HasVoted' => 1
        ]);

        // update isthara vote count
        Http::patch('https://sheet.best/api/sheets/259b6aff-3c82-4ca1-8f3f-61c32272bf1a/tabs/dataIsthara/peserta/' . $istharaName, [
            'totalVote' => $totalVote + 1
        ]);
    }

    public function dataVoters(Request $request)
    {
        //dd($request->input());
        $nama = $request->input('name');
        $email = $request->input('email');

        $dataJSON = Http::get("https://sheet.best/api/sheets/259b6aff-3c82-4ca1-8f3f-61c32272bf1a/tabs/hasilVote/Email/" . $email)->json();
        $dataIsthara = collect($dataJSON);

        if (count($dataIsthara) > 0 && $dataIsthara[0]['HasVoted'] == "1") {
            return true;
        }

        Http::post('https://sheet.best/api/sheets/259b6aff-3c82-4ca1-8f3f-61c32272bf1a/tabs/hasilVote', [
            'Name' => $nama,
            'Email' => $email,
            'HasVoted' => 0
        ]);
    }
}
