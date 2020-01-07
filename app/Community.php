<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $table = 'communities';

    protected $fillable = ['name', 'description', 'website', 'contact_person'];
}
