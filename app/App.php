<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = ['name', 'bundle_id', 'person_id'];

    public function people()
    {
      return $this->belongsToMany(Person::class, 'manageappdb.person_apps', 'app_id', 'person_id' );
    }
}
