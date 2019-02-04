<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products as Products;
use App\Saveditem as Saveditem;
use Auth;

class ViewController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    
    public function home()
    {
        // $products = Products::find();

        // dd($products);
        return view('landing');
    }

    public function index(Request $request)
    {
        
        // $products = Products::find();

        $keyword = $request->search;
        $products = Products::where('tags', 'like', "%{$keyword}%")
        ->orderBy('name', 'desc')
        ->get();
        // $id = Auth::id();

        // dd($products);
        return view('searchViewItem', compact('products'));
    }


    public function indexItem(Request $request)
    {
        
        // $products = Products::find();

        $products = Products::where('category', $request->search)
        ->orderBy('name', 'desc')
        ->get();

        // dd($products);
        return view('searchViewItem', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $iditem = Auth::id();
        $data = [];

        // dd($iditem)

        if ($iditem === null){
            $data['status'] = '';
            $data['title'] = 'Wish';
            $data['id'] = 'null';

            $products = Products::find($id);
            return view('products.show', compact('products','data'));
        } else
        {
            $saveditems = Saveditem::where('user_id', $iditem)
            ->get();;
            
            if( sizeof($saveditems) == 0 ) 
            {
                $data['status'] = '';
                $data['title'] = 'Wish';
                $products = Products::find($id);
                $data['id'] = $iditem;
                return view('products.show', compact('products','data'));

            } else
            {
                $products = Products::find($id);
                $data['id'] = $iditem;

                // dd($saveditems);

                foreach($saveditems as $saveditem)
                {
                    if ( $saveditem->product_id === $products->id )
                    {
                        $data['status'] = 'disabled';
                        $data['title'] = 'On My List';
                        break;
                    } else 
                    {
                        $data['status'] = '';
                        $data['title'] = 'Wish';
                    }
                }
        
                return view('products.show', compact('products','saveditems','data'));
            }
        }
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
        
    }
}
