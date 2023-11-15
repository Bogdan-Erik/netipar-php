<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function telephones()
    {
        return $this->hasMany(Telephone::class);
    }
}
