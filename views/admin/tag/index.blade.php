@extends('template.home')
@section('sub-judul' , 'Tags')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
  </div> 
@endif

<a href="{{ route('tag.create') }}" class="btn btn-info btn-sm">Tambah Tags</a>
	<br><br><br>
<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Tags</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tag as $result => $hasil)
			<tr>
				<td>{{ $result + $tag->firstitem() }}</td>
				<td>{{ $hasil->name }}</td>
				<td>
					<form action="{{ route('tag.destroy', $hasil->id )}}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('tag.edit', $hasil->id )}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
					</form>
				</td>
			</tr>
			@endforeach


		</tbody>
	</table>
	{{ $tag->links() }}
@endsection
