<?php

namespace App\Models;

use App\WewenangEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pegawai';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_pegawai',
        'nip',
        'pangkat_golongan',
        'jabatan',
        'bagian_kerja',
        'tanggal_lahir',
        'wewenang',
    ];

    protected $casts = [
        'wewenang' => 'array',
    ];

    public function pejabatSt(){
        return $this->hasMany(Pegawai::class, 'id_pejabat_st', 'id_pegawai');
    }

    public function pejabatSpd(){
        return $this->hasMany(Pegawai::class, 'id_pejabat_spd', 'id_pegawai');
    }


    public function pegawaiBertugas(){
        return $this->hasMany(Surat::class, 'id_pegawai_bertugas', 'id_pegawai');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'pegawai_id', 'id_pegawai');
    }

}
