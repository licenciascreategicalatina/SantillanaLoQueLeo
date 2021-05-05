<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangeBackgroundController extends Controller
{
    public function changeBackgroundPage() {
        return response()->json(['data'  => 'no']);
    }
}
