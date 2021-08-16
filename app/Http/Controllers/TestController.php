<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(): Response
    {
        $donations = DB::table('wp_donations')->take(10)->get();
        return response()->json($donations);
    }
}