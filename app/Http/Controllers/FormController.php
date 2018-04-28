<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\engineer;


class FormController extends Controller
{
    public function create()
    {
    	return view('engineer.create');
    }

    public function store(Request $request)
    {
    	// $engineer = new \App\engineer;
    	// $engineer->eid = $request->eid;
    	// $engineer->nama_engineer = $request->nama_engineer;
    	// $engineer->tanggal_lahir = $request->tanggal_lahir;
    	// $engineer->jenis_kelamin = $request->jenis_kelamin;
    	// $engineer->save();
    	// return redirect('engineer');
    	engineer::create($request->all());
    	return redirect ('engineer');
    }
    
    public function index()
    {
    	$engineer_list = engineer::all()->sortBy('eid');
    	$jumlah_engineer = $engineer_list->count();
    	return view('engineer.index', compact('engineer_list', 'jumlah_engineer'));
    }
    
    public function show ($id) 
    {
    	$engineer = engineer::findOrFail($id);
    	return view('engineer.show', compact('engineer'));
    }
    
    public function edit($id)
    {
        $engineer = engineer::findOrFail($id);
        return view('engineer.edit', compact('engineer'));
    }

    public function update($id, Request $request)
    {
        $engineer = engineer::findOrFail($id);
        $engineer->update($request->all());
        return redirect('engineer');

    }

}


