<?php

namespace App\Models\Ksadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ks_admin extends Model
{
	use HasFactory;

	protected $connection = 'ksadmin';
	protected $table ='ks_admin';
	protected $guarded = [];
	public $timestamps = false;
}
