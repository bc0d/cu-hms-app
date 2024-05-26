<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';
    protected $primaryKey = 'notice_id';

    protected $fillable = [
        'title',
        'publishedby',
        'path',
    ];
}
