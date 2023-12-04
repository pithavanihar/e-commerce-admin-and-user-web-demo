<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['cart'];

    public function user(){
      return  $this->belongsTo(User::class);
    }
}
