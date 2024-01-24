<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'opening_id',
        'file',
    ];

     /**
     * Get the openings associated with the career.
     */
    public function openings()
    {
        return $this->hasMany(Opening::class);
    }

}