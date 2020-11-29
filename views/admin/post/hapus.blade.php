@extends('template.home')
@section('sub-judul','Artikel Dihapus')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
	@endif

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Artikel</th>
				<th>Kategori</th>
				<th>Daftar Tags</th>
				<th>Thumbnail</th>
				<th>Creator</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($post as $result => $hasil)
			<tr>
				<td>{{ $result + $post->firstitem() }}</td>
				<td>{{ $hasil->judul }}</td>
				<td>{{ $hasil->category->name }}</td>
				<td>@foreach($hasil->tags as $tag)
					<ul>
						<h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
					</ul>
					@endforeach		
				</td>
				<td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
				<td>
				<td>
					<form action="{{ route('post.kill', $hasil->id ) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('post.restore', $hasil->id ) }}" class="btn btn-primary"><i class="fa fa-trash-restore"></i></a>
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $post->links() }}

@endsection
