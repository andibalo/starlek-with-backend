<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataJudge extends Model
{
    protected $table = 'judges';

    protected $fillable = [
        'fullName',
        'token',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
