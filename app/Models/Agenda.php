<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = [
    	'judul','slug','deskripsi','thumbnail','tgl','jam_mulai','jam_selesai','tgl_mulai','tgl_selesai','user_id',
    ]; 
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getThumbnail()
    {
    	return 'uploads/img/agenda/'.$this->thumbnail;
    }
}
