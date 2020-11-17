<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratjalanbarangkeluar extends Model
{
    protected $table = 'suratjalanbarangkeluar';
    protected $fillable = ['id', 'tanggal', 'nama_penerima', 'alamat'];
    public $timestamps = false;
    protected $primaryKey = "id";

    public function masterdatabarang()
    {
    	// return $this->belongsToMany(Masterdatabarang::class);
    	return $this->belongsToMany(Masterdatabarang::class)->withPivot('masterdatabarang_id', 'suratjalanbarangkeluar_id', 'jumlah'); ;
    }
}
