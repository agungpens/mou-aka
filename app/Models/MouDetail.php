<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MouDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mou_details';
    protected $guarded = ['id'];
}
