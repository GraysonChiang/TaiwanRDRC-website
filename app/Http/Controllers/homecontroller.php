<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use anlutro\cURL\cURL;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Support\Facades\DB;


class homecontroller extends Controller
{


    protected $hostname = 'https://rdrc.mnd.gov.tw/rdrc/';


    protected $html;

    public function index()
    {

        $posts = DB::table('officialnews')->orderBy('sid', 'desc')->take(10)->get();

        $result = [
          'total' => $this->getTotalPeople(),
          'onlineTotal' => $this->getTotalOnlinePeople(),
//            'total' => '12',
//            'onlineTotal' => '123',
            'data' => $posts,
            'isIndex' => true
        ];


        return view('index', ['result' => $result]);
    }


    public function study()
    {
        $result = [
            'isIndex' => false
        ];

        return view('study', ['result' => $result]);
    }
    public function benefit()
    {
        $result = [
            'isIndex' => false
        ];

        return view('benefit', ['result' => $result]);
    }

    public function work()
    {

        $result = [
            'isIndex' => false
        ];
        return view('work', ['result' => $result]);
    }

    public function welcome()
    {

        $result = [
            'isIndex' => false
        ];
        return view('welcome', ['result' => $result]);
    }

    public function health()
    {
        $result = [
            'isIndex' => false
        ];

        return view('health', ['result' => $result]);
    }


   public function messagePost(Request $request){

//       dd($request['name'].$request['phone'].$request['type']);


       $this->validate($request, [
           'name' => 'required|max:255',
           'phone' => 'required',
           'type' => 'required',
           'content' => 'required'
       ]);



       $message = DB::table('messages')->insert(
           [
               'name' => $request['name'],
               'phone' =>$request['phone'],
               'content' =>$request['content'],
               'type' =>$request['type'],
               'create_at'=> date('Y-m-d H:i:s'),
           ]);






       return redirect('/');

   }



    public function getTotalOnlinePeople()
    {

        $html = HtmlDomParser::file_get_html('https://rdrc.mnd.gov.tw/rdrc/');

        $Total = trim($html->find('#ctl00_online_count', 0)->plaintext, ' ');

        return $Total;

    }


    public function getTotalPeople()
    {

        $html = HtmlDomParser::file_get_html('https://rdrc.mnd.gov.tw/rdrc/');

        $peopleTotal = trim($html->find('#ctl00_accu_count', 0)->plaintext, ' ');

        return $peopleTotal;

    }





}





