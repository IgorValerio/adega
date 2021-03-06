<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Product;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function showProduct(Request $request, $id){
        $produto = Product::find($id);
        return view('product', compact('produto'));
    }

    function favouritesView(){
         $produto = auth()->user()->favourites;
        return view('/favourites', compact('produto'));
    }

    function removeFav(Request $request, $id){
        $teste = DB::table('favourites')
                    ->where('products_id', $id)
                    ->delete();
        return redirect('/favourites');
    }

    function insertFav(Request $request, $id){
        $teste = DB::table('favourites')
                    ->insert(
                        [   'products_id' => $id,
                            'users_id'    => auth()->user()->id
                        ]);
        return redirect('/favourites');
    }


    public function wineList(){
        $list = Product::select()->where('categories_id', '=', 1)->paginate(9);
        return view ('products.wines', compact('list'));
    }

    public function kitsList(){
        $list = Product::select()->where('categories_id', '=', 5)->paginate(9);
        return view ('products.kits', compact('list'));
    }

    public function distilledsList(){
        $list = Product::select()->where('categories_id', '=', 3)->paginate(9);
        return view ('products.distilleds', compact('list'));
    }

    public function beersList(){
        $list = Product::select()->where('categories_id', '=', 2)->paginate(9);
        return view ('products.beers', compact('list'));
    }

    public function nonAlcoholicsList()
    {
        $list = Product::select()->where('categories_id', '=', 4)->paginate(9);
        return view('products.nonAlcoholics', compact('list'));
    }

    public function promotionsList(){
        $list = Product::select()->where('categories_id', '=', 6)->paginate(9);
        return view ('products.promotions', compact('list'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
