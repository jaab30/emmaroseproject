<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Review as Review;

use Auth;

use App\Saveditem as Saveditem;

class SaveditemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        dd('yes');
        return view('saveditems/items');
    }

    public function wishList()
    {
        $id = Auth::id();
        $saveditems = Saveditem::where('user_id', $id )
        ->orderBy('name', 'desc')
        ->get();
        return view('saveditems/wishlist', compact('saveditems'));
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
    public function store( Request $request )
    {

       
        $saveditem = new Saveditem(); 

        $saveditem->product_id = $request->product_id;
        $saveditem->name = $request->name;
        $saveditem->description = $request->description;
        $saveditem->summary = $request->summary;
        $saveditem->tags = $request->tags;
        $saveditem->picture = $request->picture;
        $saveditem->picture2 = $request->picture2;
        $saveditem->category = $request->category;
        $saveditem->genre = $request->genre;
        $saveditem->color = $request->color;
        $saveditem->price = $request->price;
        $saveditem->user_id = $request->user_id;
        
        $saveditem->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saveditems = Saveditem::find($id);
        $data = [];
        $data['summary'] = explode("." , $saveditems->summary);
        $product_id = $saveditems->product_id;
        $reviews = Review::where('product_id', $product_id)
        ->get();

        $avgRating = $reviews->avg('rating');

        $round = round($avgRating,0);
        // $starImg = '';
        // dd($round);

            if ($round == 1) {
                $starImg = '/images/star1.png';
            } else if ($round == 2){
                $starImg = '/images/star2.png';
            } else if ($round == 3){
                $starImg = '/images/star3.png';
            } else if ($round == 4){
                $starImg = '/images/star4.png';
            } else if ($round == 5){
                $starImg = '/images/star5.png';
            } else {
                $starImg = '/images/star0.png';
            };





        return view('saveditems.wishitem', compact('saveditems','data','reviews','starImg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $saveditem = Saveditem::find($id);

        Cart::add($id, $saveditem->name, $request->quantity, $saveditem->price, ['size' => $request->size ]);

        return back();
        // return redirect()->back();
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
        $saveditem = Saveditem::findOrFail($id);

        $saveditem->delete();

        return redirect()->back();
    
    }
}
