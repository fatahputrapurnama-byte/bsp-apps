@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kajian & Study</h1>
      </div>
      @if (session()->has('success')) 
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="table-responsive col-lg-8">
        <a href="/dashboard/kajianstudy/create" class="btn btn-primary mb-2">Create new post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              {{-- <th scope="col">Manfaat</th>
              <th scope="col">Penjelasan</th> --}}
            </tr>
          </thead>
          <tbody>
              @foreach ($kajianstudy as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                {{-- <td>{!! Str::limit($post->advantage, 20, '...') !!}</td>
                <td>{!! Str::limit($post->body, 20, '...') !!}</td> --}}
                <td> 
                  <a href="/dashboard/kajianstudy/{{ $post->id }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"><span></a>
                  <a href="/dashboard/kajianstudy/{{ $post->id }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"><span></a>
                    <form action="{{ url('dashboard/kajianstudy/'.$post->id) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"><span></button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{ $kajianstudy->links() }}
      </div>
@endsection