@extends('layouts.master')

@section('head')
	@parent
		<title>Ticket list | Cashbox</title>

@stop

@section('content')
		@parent

		<div class="container-liquid">
				<div class="row">

					<div class="col-xs-12">
							<div class="sec-box">
									<a class="closethis">Close</a>
									<header>
											<h2 class="heading">Condensed Table</h2>
									</header>
									<div class="contents">
											<a class="togglethis">Toggle</a>
											<section>
													<table class="table table-condensed">
															<thead>
																	<tr>
																			<th>#</th>
																			<th>Book Name</th>
																			<th>Writter Name</th>
																			<th> Action </th>
																	</tr>
															</thead>
															<tbody>
																	@foreach ( $books as $book )
																	<tr id="name" list="<?php echo $book->id;?>">
																			<td>{{ $count++ }}</td>
																			<td>{{ $book->book_name }}</td>
																			<td>{{ $book->writer_name }}</td>
																			<td><button type="button" class="btn btn-info">Edit</button> <button type="button" class="btn btn-danger" id="delete_book">Delete</button></td>
																	</tr>
																	@endforeach
															</tbody>
													</table>
													<center>{{ $books->links() }}</center>
											</section>
									</div>
							</div>
					</div>


				</div>
				<!-- Row End -->
		</div>

		@stop
@stop
