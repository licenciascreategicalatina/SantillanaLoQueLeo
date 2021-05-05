<?php

namespace App\Http\Controllers;

use App\Models\ClickBook;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function indexReports()
    {
        $users = User::all();
        $i = 0;
        $online = [];
        foreach ($users as $onlineUsers) {
            if ($onlineUsers->isOnline()){
                array_push($online, (object)[
                    'index' => $i++,
                    'id' => $onlineUsers->id,
                    'name' => $onlineUsers->name,
                    'email' => $onlineUsers->email,
                    'estado' => 1
                ]);
            }
        }
        $countUser = count($users);
        $countData = count($online);
        return view('reports', compact('countData', 'countUser'));
    }

    public function getUserLogin(Request $request)
    {
//         dd('holas');
        if ($request->input("day1") == '1') {
            $query = DB::table('login_platforms')
                ->select('*')
                ->whereDate('start_date', '2021-05-04')
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
        } else if ($request->input("day1") == '2') {

            $query = DB::table('login_platforms')
                ->select('*')
                ->whereDate('start_date', '2021-05-05')
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
        } else if ($request->input("day1") == '3') {

            $query = DB::table('login_platforms')
                ->select('*')
                ->whereDate('start_date', '2021-05-06')
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
        } else {
            $getUserLogin = User::userLogin();
            return datatables()->of($getUserLogin)->toJson();
        }

    }

    public function getBooksSelected(Request $request)
    {

        if ($request->input("day1") == '1') {
            $query = DB::table('click_books')
                ->select('*')
                ->whereDate('start_date', '2021-05-04')
                ->join('users', 'users.id', '=', 'users_id')
                ->orderBy('start_date', 'ASC')
                ->get();
            $userBooksSelected = [];
            $i = 1;
            foreach ($query as $bookSelected) {
                array_push($userBooksSelected, (object)[
                    'index' => $i++,
                    'id' => $bookSelected->id,
                    'name' => $bookSelected->name,
                    'image' => $bookSelected->img_book,
                    'email' => $bookSelected->email,
                    'book' => $bookSelected->book,
                    'start_date' => $bookSelected->start_date,
                ]);
            }
            return datatables()->of($userBooksSelected)->toJson();
        } else if ($request->input("day1") == '2') {
            $query = DB::table('click_books')
                ->select('*')
                ->whereDate('start_date', '2021-05-05')
                ->join('users', 'users.id', '=', 'users_id')
                ->orderBy('start_date', 'ASC')
                ->get();
            $userBooksSelected = [];
            $i = 1;
            foreach ($query as $bookSelected) {
                array_push($userBooksSelected, (object)[
                    'index' => $i++,
                    'id' => $bookSelected->id,
                    'name' => $bookSelected->name,
                    'image' => $bookSelected->img_book,
                    'email' => $bookSelected->email,
                    'book' => $bookSelected->book,
                    'start_date' => $bookSelected->start_date,
                ]);
            }
            return datatables()->of($userBooksSelected)->toJson();

        } else if ($request->input("day1") == '3') {
            $query = DB::table('click_books')
                ->select('*')
                ->whereDate('start_date', '2021-05-06')
                ->join('users', 'users.id', '=', 'users_id')
                ->orderBy('start_date', 'ASC')
                ->get();
            $userBooksSelected = [];
            $i = 1;
            foreach ($query as $bookSelected) {
                array_push($userBooksSelected, (object)[
                    'index' => $i++,
                    'id' => $bookSelected->id,
                    'name' => $bookSelected->name,
                    'image' => $bookSelected->img_book,
                    'email' => $bookSelected->email,
                    'book' => $bookSelected->book,
                    'start_date' => $bookSelected->start_date,
                ]);
            }
            return datatables()->of($userBooksSelected)->toJson();
        } else {
            $query = DB::table('click_books')
                ->select('*')
                ->join('users', 'users.id', '=', 'users_id')
                ->orderBy('start_date', 'ASC')
                ->get();
            $userBooksSelected = [];
            $i = 1;
            foreach ($query as $bookSelected) {
                array_push($userBooksSelected, (object)[
                    'index' => $i++,
                    'id' => $bookSelected->id,
                    'name' => $bookSelected->name,
                    'image' => $bookSelected->img_book,
                    'email' => $bookSelected->email,
                    'book' => $bookSelected->book,
                    'start_date' => $bookSelected->start_date,
                ]);
            }
            return datatables()->of($userBooksSelected)->toJson();
        }
    }

    public function countBooks(){
        $query = DB::table('click_books')
            ->select('*')
            ->join('users', 'users.id', '=', 'users_id')
            ->orderBy('start_date', 'ASC')
            ->get();
        $userBooksSelected = [];
        $i = 1;
        $bookCount = 0;
        foreach ($query as $bookSelected) {

            array_push($userBooksSelected, (object)[
                'index' => $i++,
                'name' => $bookSelected->book,

            ]);
        }

//        $mao = ['mao', 'guti', 'mao'];
//        $array =  array_count_values($mao);
        return datatables()->of($userBooksSelected)->toJson();
    }

    public function usersOnline(){
        $users = User::all();

        $online = [];
        $i = 1;
//        $onlineState = 0;
        foreach ($users as $onlineUsers) {
//            if ($onlineUsers->isOnline()){
//                $onlineState = 1;
//            }
            if ($onlineUsers->isOnline()){
            array_push($online, (object)[
                'index' => $i++,
                'id' => $onlineUsers->id,
                'name' => $onlineUsers->name,
                'email' => $onlineUsers->email,
                'estado' => 1
            ]);
            }
        }
        return datatables()->of($online)->toJson();
    }
}
