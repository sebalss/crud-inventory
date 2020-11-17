<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    protected $table = 'suratkeluar';
    protected $fillable = ['id', 'tanggal', 'nama_penerima', 'alamat'];
    public $timestamps = false;
    protected $primaryKey = "id";

    public function masterbarang()
    {
    	// return $this->belongsToMany(Masterdatabarang::class);
    	return $this->belongsToMany(Masterbarang::class)->withPivot('masterbarang_id', 'suratkeluar_id', 'jumlah'); ;
    }
}
