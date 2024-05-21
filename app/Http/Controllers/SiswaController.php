<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    function index(){
        echo 'ini function index';
    }
    function list(){
        echo 'ini list data';
    }
    function create(){
        return view('siswa.create');
    }
    function simpan(){
        echo 'data berhasil disimpan';
    }
}
