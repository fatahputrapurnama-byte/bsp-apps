@extends('dashboard.layouts.main')

@section('container')
   <div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="my-3">{{ $client->name }}</h1>

            <a href="/dashboard/client" class="btn btn-info"><span data-feather="arrow-left"></span>kembali ke client saya</a>
            <a href="/dashboard/client/{{ $client->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="{{ url('dashboard/client/'.$client->id) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
                    </form>
            <div style="max-height: 350px; overflow:hidden;">    
                <img src="{{ asset('assets/img/client/'.$client->image) }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>  
</div>
@endsection