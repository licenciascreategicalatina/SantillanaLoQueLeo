<?php

namespace App\Http\Controllers;

use App\Models\ClickBook;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Rap2hpoutre\FastExcel\FastExcel;

class LandingController extends Controller
{

    public function index()
    {
        //return view('landing');
        return view('home-day-one');
    }

    public function indexPrograma()
    {
        return view('programa');
    }

    public function indexOne()
    {
        return view('home-day-one');
    }

    public function indexTwo()
    {
        return view('home-day-two');
    }

    public function indexThree()
    {
        return view('home-day-three');
    }

    public function importView()
    {
        return view('view-import');
    }

    public function importData(Request $request) {
        $data = $request->file('data');

        $user = (new FastExcel())->import( $data, function($line) {
            return User::create([
                'name' => $line['name'] . ' ' . $line['lastname'],
                'email' => $line['email'],
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        });

        return back()->with('message', 'Se importo correctamente.');
    }

    public function eventClickBook( Request $request ) {

        $clickbook = new ClickBook;
        $clickbook->users_id = auth()->user()->id;
        $clickbook->start_date = Carbon::now()->timezone("America/Bogota");
        $clickbook->book = $request->title;
        $clickbook->img_book = $request->imgCaratula;
        $clickbook->save();

        return response()->json('ok');
    }

}















