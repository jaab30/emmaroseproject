@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 

<h1>Payment Confirmation</h1>


<p>{{ $confirm['invoiceId'] }}</p>
<p> {{ $confirm['buyerFirst'] }} {{ $confirm['buyerLast'] }}</p>
<p>{{ $confirm['buyerEmail'] }}</p>
<h3> Order Details</h3>
<table>
   	<thead>
       	<tr>
           	<th>Item's Name</th>
            <th>Qty</th>
            <th>Price</th>
       	</tr>
   	</thead>
   	<tbody>
   		@foreach($confirm['items'] as $item)
       		<tr>
           		<td>{{ $item['name'] }}</td>
           		<td>{{ $item['qty'] }}</td>
           		<td>{{ $item['price']}}</td>
       		</tr>
	   	@endforeach;

		   <tr>
		   <td>Total:</td>
		   <td></td>
		   <td>{{ $confirm['total'] }}</td>
           </tr>

   	</tbody>
	   
</table>

<div><form>
<input type="button" value="Print this page" onClick="window.print()">
</form></div>


@endsection