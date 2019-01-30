@extends('layouts.main')

@section("page-title", "new Page")


@section('content')

<table>
   	<thead>
       	<tr>
           	<th>Name</th>
           	<th>Size</th>
            <th>Qty</th>
            <th>Price</th>
       	</tr>
   	</thead>

   	<tbody>

   		@foreach($cartItems as $cartItem)

       		<tr>
           		<td>{{ $cartItem->name}}</td>
           		<td>{{ $cartItem->options->has('size') ? $cartItem->options->size : ''}}</td>
           		<td>{{ $cartItem->qty}}</td>
           		<td>{{ $cartItem->price}}</td>
				<td><form action="{{ route('cart.destroy', $cartItem->rowId) }}" method="post">
				{{ csrf_field() }}
				{{ method_field('delete') }}
					<button class="searchBtn" type="submit">X</button>
					</form>
				</td>
       		</tr>

	   	@endforeach;

		   <tr>
		   <td></td>
		   <td></td>
		   <td>Qty: {{Cart::count()}}</td>
		   <td>
		   Sub Total: ${{Cart::subtotal()}}<br>
		   Tax: ${{Cart::tax()}}<br>
		   Total: ${{Cart::total()}}
		   </tr>

   	</tbody>
	   
</table>
<button>Checkout</button>


@endsection


