<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Console\Helper\Table;

class Author extends Model
{
    use SoftDeletes;
    
    protected $table = 'author';
}
