<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    use HasFactory;

    public $table = 'bukti_transfer';
    protected $fillable = [
        'id',
        'bukti',

    ];

    public function bukti()
    {
        return $this->belongsTo(Peminjaman::class, 'bukti_id', 'id');
    }
}
