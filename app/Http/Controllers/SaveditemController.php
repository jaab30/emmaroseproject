<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
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

        // $data = []; 

        // $data['name'] = $request->input('name');
        // $data['description'] = $request->input('description');
        // $data['summary'] = $request->input('summary');
        // $data['picture'] = $request->input('picture');
        // $data['category'] = $request->input('category');
        // $data['genre'] = $request->input('genre');
        // $data['color'] = $request->input('color');
        // $data['price'] = $request->input('price');
        // $data['user_id'] = $request->input('user_id');
      
        // // if ( $request->isMethod('post') )
        // // {
        // //     dd($data);
        // //     return redire('saved');

        // // }
        // $saveditem->insert($data);
        // return redirect('saveditems/items');
       
       
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
        // dd($saveditem);
        $saveditem->save();
        // return redirect('saveditems/items');
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


        return view('saveditems.wishitem', compact('saveditems','data'));
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
