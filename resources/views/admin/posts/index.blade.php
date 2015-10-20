@extends('template')

@section('content')
	<h1>Blog Admin</h1>

	{{-- table.table.table-hover>tr>th*3 --}}

	<table class='table table-hover'>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Action</th>
		</tr>

		@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td></td>
			</tr>
		@endforeach
		</table>

		{!! $posts->render() !!}
	</table>
@endsection