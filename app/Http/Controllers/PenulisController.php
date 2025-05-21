<?php
namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::orderBy('id', 'desc')->get();
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis = Penulis::all();
        return view('penulis.create', compact('penulis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penulis'     => 'required|unique:penulis',
            'jenis_kelamin'    => 'required',
            'tanggal_lahir'    => 'required',
            'biografi_singkat' => 'required',

        ]);
        $penulis                   = new Penulis;
        $penulis->nama_penulis     = $request->nama_penulis;
        $penulis->jenis_kelamin    = $request->jenis_kelamin;
        $penulis->tanggal_lahir    = $request->tanggal_lahir;
        $penulis->biografi_singkat = $request->biografi_singkat;

        $penulis->save();

        return redirect()->route('penulis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_penulis'     => 'required',
            'jenis_kelamin'    => 'required',
            'tanggal_lahir'    => 'required',
            'biografi_singkat' => 'required',

        ]);
        $penulis                   = Penulis::findOrFail($id);
        $penulis->nama_penulis     = $request->nama_penulis;
        $penulis->jenis_kelamin    = $request->jenis_kelamin;
        $penulis->tanggal_lahir    = $request->tanggal_lahir;
        $penulis->biografi_singkat = $request->biografi_singkat;

        $penulis->save();
        return redirect()->route('penulis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();
        return redirect()->route('penulis.index')->with('success');
    }
}
