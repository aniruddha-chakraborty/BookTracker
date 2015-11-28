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
																			<th>First Name</th>
																			<th>Last Name</th>
																			<th>Username</th>
																	</tr>
															</thead>
															<tbody>
																	<tr>
																			<td>1</td>
																			<td>Mark</td>
																			<td>Otto</td>
																			<td>@mdo</td>
																	</tr>
																	<tr>
																			<td>2</td>
																			<td>Jacob</td>
																			<td>Thornton</td>
																			<td>@fat</td>
																	</tr>
																	<tr>
																			<td>3</td>
																			<td colspan="2">Larry the Bird</td>
																			<td>@twitter</td>
																	</tr>
																	<tr>
																			<td>4</td>
																			<td>Mark</td>
																			<td>Otto</td>
																			<td>@mdo</td>
																	</tr>
																	<tr>
																			<td>5</td>
																			<td>Jacob</td>
																			<td>Thornton</td>
																			<td>@fat</td>
																	</tr>
																	<tr>
																			<td>6</td>
																			<td colspan="2">Larry the Bird</td>
																			<td>@twitter</td>
																	</tr>
																	<tr>
																			<td>7</td>
																			<td>Jacob</td>
																			<td>Thornton</td>
																			<td>@fat</td>
																	</tr>
																	<tr>
																			<td>8</td>
																			<td colspan="2">Larry the Bird</td>
																			<td>@twitter</td>
																	</tr>
															</tbody>
													</table>
											</section>
									</div>
							</div>
					</div>


				</div>
				<!-- Row End -->
		</div>

		@stop
@stop
