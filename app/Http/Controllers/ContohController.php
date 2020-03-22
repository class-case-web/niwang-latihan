<?php

namespace App\Http\Controllers;

use App\Author;

class ContohController extends Controller
{
    public function Index()
    {
        $all = Author::all('id', 'name', 'email', 'phone');
        $find = Author::findById(2);
        
        $arr['page'] = 'Contoh';
        $arr['semua'] = $all;
        $arr['cari'] = $find;
        return view('Contoh.index',$arr);
    }
    
    public function Update($id)
    {
        $data = Author::all('id', 'name', 'email', 'phone');
        foreach ($data as $key => $row) {
            echo $key . ' ';
            echo $row->name;
            echo "<br>";
        }
        
        $data1 = Author::all('id', 'name', 'email', 'phone')
            ->where('id', $id)->first();
        echo '<br>' . $data1->name;
    }
}
