<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pengurus;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';

    protected $fillable = [
    	'nama_divisi',
    ];

    public function pengurus()
    {
    	return $this->hasMany(Pengurus::class,'divisi_id');
    }
}