<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterbarang extends Model
{
     protected $table = 'masterbarang';
    protected $fillable = ['id', 'nama_barang', 'stok'];
    public $timestamps = false;
    protected $primaryKey = "id";

    public function suratmasuk()
    {
    	// return $this->belongsToMany(Suratjalanbarangmasuk::class);
    	return $this->belongsToMany(Suratmasuk::class)->withPivot('suratmasuk_id'); ;
    }

    public function suratkeluar()
    {
    	// return $this->belongsToMany(Suratjalanbarangmasuk::class);
    	return $this->belongsToMany(Suratkeluar::class)->withPivot('suratkeluar_id'); ;
    }
}
