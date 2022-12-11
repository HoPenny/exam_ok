<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $dates = ['enabled_at'];
    protected $fillable = ['subject', 'content', 'cgy_id', 'enabled', 'enabled_at', 'sort', 'pic'];
}