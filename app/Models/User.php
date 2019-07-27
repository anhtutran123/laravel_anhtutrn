<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = ['mail_address','name','address','phone','password',];
    public $timestamps = true;

    /**
     * Get users from DB sort by email and paginated 20 each
     *
     * @return user
     */
    public static function getUsersFromDB() {
        return self::orderBy('mail_address', 'asc')->paginate(20);
    }

    /**
     * Create user after input was validated
     *
     * @param $input
     */
    public static function createUser($input) {
        $now = Carbon::now('utc')->toDateTimeString();
        DB::table('users')->insert([
                'mail_address' => $input['mail_address'],
                'name' => $input['name'],
                'address' => $input['address'],
                'phone' => $input['phone'],
                'password' =>Hash::make($input['password']),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
