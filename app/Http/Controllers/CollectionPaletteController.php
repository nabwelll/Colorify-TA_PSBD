<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CollectionPaletteController extends Controller
{
    public function index()
    {
        $data = DB::table('collections')
            ->join('color_palettes', 'collections.id', '=', 'color_palettes.collection_id')
            ->select('collections.name as collection_name', 'color_palettes.name as palette_name', 'color_palettes.colors')
            ->get();

        return view('collections_palettes.index', compact('data'));
    }
}
