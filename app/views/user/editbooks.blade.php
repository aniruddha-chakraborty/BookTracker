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
                        <h2 class="heading">Default Form Inputs</h2>
                    </header>
                    <div class="contents">
                        <a class="togglethis">Toggle</a>
                        <div class="table-box">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="col-md-4">Description</th>
                                        <th class="col-md-8">Form Elements</th>
                                    </tr>
                                </thead>
                                <tbody>
																<form action="{{ URL::route('postEditBooks') }}" method="POST">
                                    <tr>
                                        <td class="col-md-4">Book Name</td>
                                        <td class="col-md-8"><input type="text" name="book_name" placeholder="Book name" class="form-control" value="{{ $bookName }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-4">Writter name</td>
                                        <td class="col-md-8"><textarea rows="3" name="writer_name" placeholder="writer name" class="form-control">{{ $writerName }}</textarea></td>

                                    </tr>
																		<tr>
                                        	<input type="hidden" name="_book_id" value="{{ $bookId }}">
                                    </tr>

                                    <tr>
                                        <td class="col-md-4">Submit</td>
                                        <td class="col-md-8"><button type="submit" class="btn btn-danger" id="delete_book" />Submit</button></td>
                                    </tr>

																		</form>

                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>

		@stop
@stop
