<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function indexReports(){
        return view('reports');
    }

    public function getUserLogin(Request $request){
        dd('hola');
        if ($request->input("day1")){
            $query = DB::table('login_platforms')
                ->select('*')
                ->where('email', 'rstombe@unimayor.edu.co')
                ->join('users', 'users.id', '=', 'users_id')
                ->orderBy('start_date', 'ASC')
                ->get()
                ->unique('email');

            $aspirantRating = [];
            $i = 1;
            foreach ($query as $aspirants) {
                array_push($aspirantRating, (object)[
                    'index' => $i++,
                    'id' => $aspirants->id,
                    'name' => $aspirants->name,
                    'email' => $aspirants->email,
                    'start_date' => $aspirants->start_date,
                ]);
            }
            return datatables()->of($aspirantRating)->toJson();
        }else{
            $getUserLogin = User::userLogin();
            return datatables()->of($getUserLogin)->toJson();
        }

    }
}
