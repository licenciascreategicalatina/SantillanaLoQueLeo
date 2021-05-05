<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loginPlatform()
    {
        return $this->hasOne(LoginPlatform::class);
    }

    public static function userLogin()
    {
        $query = DB::table('login_platforms')
            ->select('*')
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

        return $aspirantRating;
    }
    public function clickBook() {
        return $this->hasOne(ClickBook::class);
    }

    public function isOnline(){
        return Cache::has('user-is-online-' . $this->id);
    }
}
