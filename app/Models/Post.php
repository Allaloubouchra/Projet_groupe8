<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

  use HasFactory;
  protected $fillable = ['title','content','isVisible','isValide','user_id'];

  public function media() {
    return $this->hasMany(related: PostMedia::class);
  }

  public function user() 
 {
  return $this->belongsTo(related: User::class);
 }

  public function ratings()
    {
        return $this->hasMany(related: Rating::class);
    }

}
