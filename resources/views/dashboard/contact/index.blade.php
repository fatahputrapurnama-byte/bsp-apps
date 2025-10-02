@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List pengunjung</h1>
      </div>
      @if (session()->has('success')) 
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="table-responsive col-lg-8">
        {{-- <a href="/dashboard/kajianstudy/create" class="btn btn-primary mb-2">Create new post</a> --}}
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">No Hp</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($contact as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->no_hp }}</td>
                {{-- <td>{!! Str::limit($post->advantage, 20, '...') !!}</td>
                <td>{!! Str::limit($post->body, 20, '...') !!}</td> --}}
                <td>
                @if ($post->hubungi == 1)    
                <button class="badge bg-success border-0" disabled>Sudah dihubungi</button>
                @else
                <form method="post" action="{{ url('dashboard/contact/'.$post->id) }}" class="d-inline">
                  @method('put')
                  @csrf
                  <input type="hidden" name="hubungi" id="hubungi" value="1">
                  <button class="badge bg-danger border-0">Belum dihubungi</button>
                </form>
                @endif
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{ $contact->links() }}
      </div>
@endsection