<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'cpf', 'birthday', 'rg', 'profile_id'];

    public function profile()
    {
      return $this->belongsTo(Profile::class);
    }

    public function apps()
    {
      return $this->belongsToMany(App::class, 'manageappdb.person_apps', 'person_id', 'app_id');
    }
}
