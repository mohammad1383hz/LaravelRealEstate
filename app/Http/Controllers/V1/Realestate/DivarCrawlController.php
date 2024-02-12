<?php

namespace App\Http\Controllers\V1\Realestate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DivarCrawlController extends Controller
{


    public function index(Request $request){


        $response = Http::get('https://divar.ir/s/tehran/real-estate');
        //  $response;
         return $response->body();
    }

    }





