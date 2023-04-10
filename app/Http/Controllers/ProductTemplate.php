<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTemplate extends Controller
{
    //
    public function index(){
        $arrProducts = [
            ['Product' => 'Uniqlo', 'Status' => "SSR", "Price" => "Rp1.000.000", 'id'=>"1"],
            ['Product' => 'Celcius', 'Status' => "SR", "Price" => "Rp500.000", 'id'=>"2"],
            ['Product' => 'Nevada', 'Status' => "R", "Price" => "Rp100.000", 'id'=>"3"],
        ];
        return view('productlist', compact('arrProducts'));
    }

    public function index1($judul){
        $arrDesc = [
            ['id'=>"1", 'desc'=>"Ini baju dari Uniqlo, harganya mahal kualitas mantap"],
            ['id'=>"2", 'desc'=>"Ini baju dari celcius, harganya standar kualitas mantap"],
            ['id'=>"3", 'desc'=>"Ini baju dari Nevada, herga bersahat kualitas lumayan"],
        ];
        $var = [];
        foreach($arrDesc as $Desc)
        {if($Desc['id']==$judul){
            $var = $Desc;
        }
        }
        return view('productdesc', compact('var'));
    }
}
