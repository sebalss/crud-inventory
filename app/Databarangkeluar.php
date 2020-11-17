<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Databarangkeluar extends Model
{
    protected $table = 'masterbarang_suratkeluar';
    protected $fillable = ['id', 'suratkeluar_id','masterbarang_id','jumlah'];
    public $timestamps = false;
    protected $primaryKey = "id";
}
