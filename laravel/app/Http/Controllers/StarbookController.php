<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataJudge;
use Response;
use Illuminate\Support\Facades\DB;
use Mail;

class StarbookController extends Controller
{
  public function createJudge(Request $request)
  {
    // $judge = DataJudge::create([
    //   'fullname' => 'Andi',
    //   'token' => 'ABCDE'
    // ]);

    // $judge = new DataJudge;
    // $judge->fullName = 'Andi';
    // $judge->token = 'ABCDE';

    // $judge->save();

    DB::insert('insert into judges (fullName, token) values (?, ?)', [$request->fullName, $request->token]);
    return csrf_token();
  }

  public function loginJudge(Request $request)
  {
    
  }
}
