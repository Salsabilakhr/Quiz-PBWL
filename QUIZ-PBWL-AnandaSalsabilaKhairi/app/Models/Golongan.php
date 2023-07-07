<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $table = "tb_golongan";
    protected $primaryKey = "gol_id";
    protected $fillable = [
        'gol_id', 'gol_nama', 'gol_kode'
    ];

    public function pelanggan()
    {
       return $this->hasMany(Pelanggan::class); 
    }
}
