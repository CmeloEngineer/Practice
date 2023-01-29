<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'practices';

    //可変項目
    protected $fillable =[
        'title',
        'content'
    ];


}
