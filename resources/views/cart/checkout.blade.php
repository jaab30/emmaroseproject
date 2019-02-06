@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 

<div class="cartMain">
	<div class="cartContainer">
			<h1>Payment Confirmation</h1>
			<h3> Order Details</h3>
		<div class="confirmationClientInfo">	
			<p><strong>Invoice Number: </strong>{{ $confirm['invoiceId'] }}</p>
			<p><strong>Name:  </strong>{{ $confirm['buyerFirst'] }} {{ $confirm['buyerLast'] }}</p>
			<p><strong>Email: </strong>{{ $confirm['buyerEmail'] }}</p>
		</div>
			
			<table class="confirmationMainTable">
				<thead>
					<tr>
						<th>Item's Name</th>
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
					<tr><td>.</td></tr>
					<tr>
					<td></td>
					<td></td>

					<td><strong>Total:</strong></td>
					<td><strong>$ {{ $confirm['total']}}</strong></td>
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