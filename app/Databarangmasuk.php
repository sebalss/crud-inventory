<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Databarangmasuk extends Model
{
    protected $table = 'masterbarang_suratmasuk';
    protected $fillable = ['id', 'suratmasuk_id','masterbarang_id','jumlah'];
    public $timestamps = false;
    protected $primaryKey = "id";

}
