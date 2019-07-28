<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'mail_address',
        'name',
        'address',
        'phone',
        'password',];
    protected $perPage = 20;
    public $timestamps = true;

    /**
     * Get users from DB sort by email and paginated 20 each
     *
     * @return user
     */
    public static function getUsersFromDB() {
        return self::orderBy('mail_address', 'asc')->paginate();
    }

    /**
     * Create user after input was validated
     *
     * @param $input
     */
    public static function createUser( $input ) {
        $user = new User();
        $user['name'] = $input['name'];
        $user['mail_address'] = $input['mail_address'];
        $user['password'] = Hash::make($input['password']);
        $user['address'] = $input['address'];
        $user['phone'] = $input['phone'];
        $user->save();
    }
}
