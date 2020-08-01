<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model
{
    //
    use Notifiable;
     //
     protected $table = "admin";
    // protected $primarykey = "id";
     public $timestamps = false;
     protected $fillable = ["root","psw","login_time","exit_time"];
     protected $hidden = ['remember_token'];

    /**
     * 更新token
     * @return mixed|string
     */
    public function generateToken() {
        $this->remember_token = str_random(128);
        $this->save();

        return $this->remember_token;
    }
}
