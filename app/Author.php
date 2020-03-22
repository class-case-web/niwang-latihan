<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Console\Helper\Table;

class Author extends Model
{
    use SoftDeletes;
    
    protected $table = 'author';
    
    public static function findById($id)
    {
        $data = Author::all('id', 'name', 'email', 'phone')
            ->where('id', $id)
            ->first();
        return $data;
    }
}
