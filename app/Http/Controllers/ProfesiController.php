<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = 1;
        $jumlah = 0;
        return view('profesi', compact('soal', 'jumlah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function answer(Request $request)
    {
        $nama = strtolower($request->nama);
        if ($request->soal == 1) {
            $soal = 2;
            if ($nama == "astronot") {
                $jumlah = $request->jumlah + 20;
                return view('profesi', compact('soal', 'jumlah'));
            } else {
                $jumlah = $request->jumlah;
                return view('profesi', compact('soal', 'jumlah'));
            }
        } elseif ($request->soal == 2) {
            $soal = 3;
            if ($nama == "dokter") {
                $jumlah = $request->jumlah + 20;
                return view('profesi', compact('soal', 'jumlah'));
            } else {
                $jumlah = $request->jumlah;
                return view('profesi', compact('soal', 'jumlah'));
            }
        } elseif ($request->soal == 3) {
            $soal = 4;
            if ($nama == "masinis") {
                $jumlah = $request->jumlah + 20;
                return view('profesi', compact('soal', 'jumlah'));
            } else {
                $jumlah = $request->jumlah;
                return view('profesi', compact('soal', 'jumlah'));
            }
        } elseif ($request->soal == 4) {
            $soal = 5;
            if ($nama == "polisi") {
                $jumlah = $request->jumlah + 20;
                return view('profesi', compact('soal', 'jumlah'));
            } else {
                $jumlah = $request->jumlah;
                return view('profesi', compact('soal', 'jumlah'));
            }
        } elseif ($request->soal == 5) {
            $soal = 6;
            if ($nama == "pilot") {
                $jumlah = $request->jumlah + 20;
                return view('score', compact('jumlah'));
            } else {
                $jumlah = $request->jumlah;
                return view('score', compact('jumlah'));
            }
        }
    }
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
