<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mobil extends Model
{
    use HasFactory;
    public $table = 'mobil';
    protected $fillable = [
        'noplat',
        'name',
        'gambar',
        'merek_id',
        'tahun',
        'harga_sewa',
    ];

    public function merek()
    {
        return $this->belongsTo(Merek::class, 'merek_id', 'id');
    }
}
