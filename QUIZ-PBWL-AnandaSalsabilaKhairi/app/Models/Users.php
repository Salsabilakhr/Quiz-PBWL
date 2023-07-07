<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    
    protected $table = "tb_users";
    protected $primaryKey = "user_id";
    protected $fillable = [
        'user_id', 'user_nama', 'user_email', 'user_password', 'user_alamat', 'user_hp', 'user_pos'
    ];

    public function pelanggan()
    {
       return $this->hasMany(Pelanggan::class); 
    }
}
