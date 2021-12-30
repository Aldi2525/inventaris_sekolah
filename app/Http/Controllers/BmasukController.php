<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Bmasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bmasuk = Bmasuk::all();
        return view('admin.bmasuk.index', compact('bmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = Supplier::all();
        return view('admin.bmasuk.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_barang' => 'required',
            'tgl_msk' => 'required',
            'jumlah_msk' => 'required',
            'id_supplier' => 'required',
        ]);

        $bmasuk = new Bmasuk;
        $bmasuk->nama_barang = $request->nama_barang;
        $bmasuk->tgl_msk = $request->tgl_msk;
        $bmasuk->jumlah_msk = $request->jumlah_msk;
        $bmasuk->id_supplier = $request->id_supplier;
        $bmasuk->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('bmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bmasuk  $bmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(Bmasuk $bmasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bmasuk  $bmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Bmasuk $bmasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bmasuk  $bmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bmasuk $bmasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bmasuk  $bmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bmasuk = Bmasuk::findOrFail($id);
        $bmasuk->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
        return redirect()->route('bmasuk.index');
    }
}
