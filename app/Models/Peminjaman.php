<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    public $table = 'peminjaman';
    protected $fillable = [
        'user_id',
        'mobil_id',
        'biaya',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function mobil()
    {
        return $this->belongsTo(User::class, 'mobil_id', 'id');
    }
}
