@extends('dashboard.layouts.main')

@section('container')
   <div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="my-3">{{ $bimtek->title }}</h1>

            <a href="/dashboard/bimtek" class="btn btn-info"><span data-feather="arrow-left"></span>kembali ke bimtek saya</a>
            <a href="/dashboard/bimtek/{{ $bimtek->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="{{ url('dashboard/bimtek/'.$bimtek->id) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
                    </form>
        <div style="max-height: 350px; overflow:hidden;">    
        <img src="{{ asset('assets/img/bimtek/'.$bimtek->image) }}" class="img-fluid" alt="">
        </div>
        <p>{!! $bimtek->advantage !!}</p>
        <p>{!! $bimtek->body !!}</p>
        </div>
    </div>  
</div>
@endsection