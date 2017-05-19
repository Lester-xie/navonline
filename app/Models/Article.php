<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'abstract',
        'content',
        'article_img',
        'author_name',
        'author_id',
        'be_dz',
        'be_pl',
        'be_see'
    ];
}