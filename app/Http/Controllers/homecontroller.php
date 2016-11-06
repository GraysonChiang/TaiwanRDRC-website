<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use anlutro\cURL\cURL;
use Sunra\PhpSimple\HtmlDomParser;


class homecontroller extends Controller
{

        public function index(){

            return view('index');
        }




    public function study(){


        return view('study');
    }


}





