<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAdmin extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'title', 'category', 'message'];

    /**
     * Get the admin that owns the request.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}

