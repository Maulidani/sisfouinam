<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Divisi;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus';

    protected $fillable = [
    	'nama_pengurus','user_id','divisi_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function divisiPengurus()
    {
    	return $this->belongsTo(Divisi::class,'divisi_id');
    }

    public function getThumbnail()
    {
    	return 'uploads/img/pengurus/'.$this->thumbnail;
    }
}