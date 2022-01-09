<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

use Illuminate\Http\JsonResponse;

class ContactoController extends Controller
{
    public function contact(){
        return view('contact/contacto');
    }

}
