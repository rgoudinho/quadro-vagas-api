<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = ['title', 'wage', 'description', 'Company_id'];
}
