<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
		protected $fillable = ['chinese','english'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
