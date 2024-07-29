<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'ticket', 'inquiry', 'status', 'created_at', 'updated_at'
    ];

    // Set default status to 'open' when creating a new inquiry
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($inquiry) {
            if (empty($inquiry->status)) {
                $inquiry->status = 'open';
            }
        });
    }
}
