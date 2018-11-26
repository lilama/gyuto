<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagegalery extends Model
{
    protected $table = 'imagegaleries';

    protected $fillable = ['titleFr', 'titleEn', 'legendFr', 'legendEn', 'nameImage'];
}
