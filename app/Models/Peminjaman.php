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
        'supir_id',
        'biaya',
        'tanggal_mulai',
        'tanggal_selesai',
        'bukti_id',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }

    public function sopir()
    {
        return $this->belongsTo(Sopir::class, 'sopir_id', 'id');
    }
    public function bukti()
    {
        return $this->belongsTo(Bukti::class, 'bukti_id', 'id');
    }
}
