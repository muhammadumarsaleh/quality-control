<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualityControl extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_id',
        'inspektor',
        'tanggal_pengecekan',
        'area',
        'sub_area',
        'eksekutor',
        'deskripsi_temuan',
        'foto_temuan_sebelum',
        'foto_temuan_sesudah',
        'status',
        'close_date',
    ];
}
