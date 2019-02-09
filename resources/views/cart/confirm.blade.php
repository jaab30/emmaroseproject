@extends('layouts.mainLogo')

@section("page-title", "new Page")

@section('content') 

<div class="cartMain">
	<div class="cartContainer">
			<h1>Payment Confirmation</h1>
			<h3> Order Details</h3>
		<div class="confirmationClientInfo">	
			<p><strong>Invoice Number: </strong>{{ $confirm['invoiceId'] }}</p>
			
			
			<p><strong>Shipping Address: </strong></p>
			<p>{{ $confirm['buyerFirst'] }} {{ $confirm['buyerLast'] }}</p>
			<p>{{ $confirm['shipping_1'] }}</p>
			<p>{{ $confirm['shipping_city'] }}, {{ $confirm['shipping_state'] }} {{ $confirm['shipping_zip_code'] }}</p>
			<p>{{ $confirm['buyerEmail'] }}</p>
			<p>{{ $confirm['buyerPhone'] }}</p>
		</div>
			
			<table class="confirmationMainTable">
				<thead>
					<tr>
						<th>Name</th>
						<th>Qty</th>
						<th>Unit Price</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($confirm['items'] as $item)
						<tr>
							<td>{{ $item['name'] }}</td>
							<td>{{ $item['qty'] }}</td>
							<td>$ {{ $item['price']}}</td>
							<td>$ {{ number_format($item['price'] * $item['qty'], 2)}}</td>
						</tr>
					@endforeach;
					<tr class="blankRow"></tr>
                    <tr>
                    <td></td>
                    <td></td>
					<td>Sub-Total:</td>
                    <td>$ {{ $confirm['subTotal'] }}</td> 
                    </tr>
                    
                    <tr>
                    <td></td>
                    <td></td>
                    <td>Shipping:</td>
                    <td>$ {{ $confirm['shipping_amt'] }}</td>
                    </tr>

                    <tr>
                    <td></td>
                    <td></td>
                    <td><strong>Total:</strong></td>
                    <td><strong>$ {{ $confirm['total'] }}</strong></td> 
                    </tr>

				</tbody>
				
			</table>
			<div class="printBtn"> 
				<form>
					<input class="printBtnForm" type="button" value="Print this page" onClick="window.print()">
				</form>
			</div>


	</div>
</div>

<div>

</div>


@endsection