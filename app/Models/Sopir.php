<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;
    public $table = 'sopir';
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'usia',
        'tarif',
        'alamat',
        'ktp',
        'sim',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
