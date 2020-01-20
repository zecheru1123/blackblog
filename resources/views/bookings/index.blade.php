<!DOCTYPE html>
<html>

<table>

	<thead>

		<tr>

			<th>ID</th>
			<th>Date Booked</th>
			<th>Booker</th>
			<th>Date to Book</th>
			<th>Type</th>
			<th>Description</th>	

		</tr>

	</thead>

	<tbody> 

		@foreach($bookings as $booking)

			<tr>
				<td>{{ $booking->ID}}</td>
				<td>{{ $booking->DATE_BOOKED}}</td>
				<td>{{ $booking->BOOKER}}</td>
				<td>{{ $booking->DATE_TO_BOOK}}</td>
				<td>{{ $booking->TYPE}}</td>
				<td>{{ $booking->DESCRIPTION}}</td>
			</tr>

		@endforeach

	</tbody>

</table>

</html>