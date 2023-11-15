<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Data extends Model
{
    use HasFactory;
    public $table = 'data';
    protected $fillable = [
        'id',
        'sim',
        'ktp',
        'bukti_transfer',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
