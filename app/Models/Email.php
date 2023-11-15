<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_id',
        'email',
    ];

    public function name()
    {
        return $this->belongsTo(Name::class);
    }
}
