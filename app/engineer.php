<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class engineer extends Model
{
    protected $table = 'engineer';

    protected $fillable = [
    	'eid',
    	'nama_engineer',
    	'tanggal_lahir',
    	'jenis_kelamin'
    ];
}
