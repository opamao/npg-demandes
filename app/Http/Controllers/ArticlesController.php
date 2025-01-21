<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $response = Http::timeout(60)->get('http://10.10.32.2:5000/articles/stock/reserve');

        // $retour = json_decode($response, true);

        // foreach ($retour as $name => $data) {

        //     $brutesArticle = new Articles();
        //     $brutesArticle->MATNR = $data['MATNR'] ?? null;
        //     $brutesArticle->MAKTX = $data['MAKTX'] ?? null;
        //     $brutesArticle->WERKS = $data['WERKS'] ?? null;
        //     $brutesArticle->LABST = $data['LABST'] ?? null;
        //     $brutesArticle->ZSTOCK_RC = $data['ZSTOCK_RC'] ?? null;
        //     $brutesArticle->ZSTOCK_RL = $data['ZSTOCK_RL'] ?? null;
        //     $brutesArticle->save();
        // }

        $articles = Articles::all();
        $activearticles = Articles::where('status_article', '=', 1)->count();
        $deactivearticles = Articles::where('status_article', '=', 0)->count();
        $totalarticles = Articles::count();

        $ss10articles = Articles::where('WERKS', '=', 'SS10')->count();
        $ss11articles = Articles::where('WERKS', '=', 'SS11')->count();
        $ss12articles = Articles::where('WERKS', '=', 'SS12')->count();
        $ss20articles = Articles::where('WERKS', '=', 'SS20')->count();
        $ss21articles = Articles::where('WERKS', '=', 'SS21')->count();
        $ss22articles = Articles::where('WERKS', '=', 'SS22')->count();

        return view('articles.articles', compact(
            'articles',
            'activearticles',
            'deactivearticles',
            'totalarticles',
            'ss10articles',
            'ss11articles',
            'ss12articles',
            'ss20articles',
            'ss21articles',
            'ss22articles',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
