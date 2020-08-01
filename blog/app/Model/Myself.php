<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Myself extends Model
{
    //
    protected $table="self";
    protected $primarykey = "root";
    public $timestamps = false;
    protected $fillable = ["root","name","article","pen","birthday"];
}
