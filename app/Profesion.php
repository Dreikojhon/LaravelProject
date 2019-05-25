<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Profesion extends Model
{
    public $timestamps = false;

    public $fillable =['title'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}