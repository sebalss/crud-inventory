<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $table = 'suratmasuk';
    protected $fillable = ['id', 'tanggal', 'supplier', 'catatan'];
    public $timestamps = false;
    protected $primaryKey = "id";

    public function masterbarang()
    {
    	// return $this->belongsToMany(Masterdatabarang::class);
    	return $this->belongsToMany(Masterbarang::class)->withPivot('masterbarang_id', 'suratmasuk_id', 'jumlah'); ;
    }

}
