<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    
    protected $table = 'profil_admin';
    protected $fillable = ['id_user','avatar','nama_lengkap','position','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','agama','no_hp','salary'];
}
