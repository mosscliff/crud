<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atil;

class AtilController extends Controller
{
    public function index()
    {
        return view('input-mahasiswa');
    }
    public function show(){
        $model = new atil;
        $data=$model->all();
        return view('show-data-mahasiswa',['data'=>$data]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim'=>['required','min:3','unique:atils'],
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'alamat'=>'required',
            'kota'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required'
        ]);
        atil::create($validatedData);
        return redirect('show-data-mahasiswa')->with('status', 'Data Mahasiswa Telah Dimasukan');
    }
    public function delete($nim){
        $model = atil::find($nim);
        $model->delete();
        return redirect('show-data-mahasiswa')->with('status-deleted','Data Mahasiswa Telah Dihapus');
    }
    public function edit($nim){
        $model= atil::find($nim);
        return view('edit-mahasiswa')->with('post',$model);
    }
    public function update(Request $request, $nim){
        $model= atil::find($nim);
        $rules = [
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'alamat'=>'required',
            'kota'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required'
        ];
        if ($request->nim != $model->nim) {
            $rules['nim'] = 'required|unique:atils';
        }
        $validatedData=$request->validate($rules);
        atil::where('nim', $model->nim)
            ->update($validatedData);
        return redirect('show-data-mahasiswa')->with('status', 'Data Mahasiswa Telah Diperbarui');
    }
}
// Mahardika Surya Kusuma G.231.21.0141 REAL 
