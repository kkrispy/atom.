<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    ublic static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
