<?php
namespace App\Http\Controllers;

use App\Models\Alat;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::all();

        return view('alats.index', compact('alats'));
    }
}
