@extends('layouts.mainLogo')

@section('content')

<div class="cartMain">

	<div class="cartContainer">

		<h1> Shopping Cart </h1>

		<table class="cartMainTable">
			<thead>
				<tr>
					<th>Name</th>
					<th>Size</th>
					<th>Qty</th>
					<th>Unit Price</th>
					<th>Price</th>
				</tr>
			</thead>

			<tbody>

				@foreach($cartItems as $cartItem)

					<tr>
						<td>{{ $cartItem->name}}</td>
						<td>{{ $cartItem->options->has('size') ? $cartItem->options->size : ''}}</td>
						<td>{{ $cartItem->qty}}</td>
						<td>$ {{ $cartItem->price}}</td>
						<td>$ {{ number_format($cartItem->price * $cartItem->qty, 2)}}</td>
						<td><form class="cartDelete" action="{{ route('cart.destroy', $cartItem->rowId) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('delete') }}
							<button class="delBtn" type="submit">remove</button>
							</form>
						</td>
					</tr>

				@endforeach
				<tr class="blankRow"></tr>
				<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><strong>Total:</strong></td>
				<td><strong>$ {{Cart::subtotal()}}</strong></td>
				</tr>

			</tbody>
			
		</table>
		<div class="continueShoppingDiv">
			<a href="{{ route('landing') }}"><button class="continueShoppingBtn">Continue Shopping</button></a>
		
		</div>
		<div class="paymentPaypalDiv">
			<a href="{{ route('checkout') }}"><button class="paymentPaypalDivBtn">Checkout</button></a>

		</div>

	</div>
</div>

@endsection


