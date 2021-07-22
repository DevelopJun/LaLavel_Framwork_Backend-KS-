<?php

namespace App\Models\ksto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ks_to extends Model
{
    use HasFactory;


    protected $connection = 'ksadmin';
    protected $table ='ks_admin';
    protected $guarded = []; // DB 접근 모두 허용 하는 것 .
    public $timestamps = false;

}
