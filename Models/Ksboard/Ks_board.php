<?php

namespace App\Models\Ksboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ks_board extends Model
{
    use HasFactory;
    protected $connection = 'ksadmin';
	  protected $table ='ks_board';
	  protected $guarded = [];
	  public $timestamps = false;
}
