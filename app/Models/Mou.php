<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mou extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mous';
    protected $guarded = ['id'];
}
