@extends('dashboard.layouts.main')

@section('container')
   <div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="my-3">{{ $kajianstudy->title }}</h1>

            <a href="/dashboard/kajianstudy" class="btn btn-info"><span data-feather="arrow-left"></span>kembali ke kajian & study saya</a>
            <a href="/dashboard/kajianstudy/{{ $kajianstudy->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="{{ url('dashboard/kajianstudy/'.$kajianstudy->id) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
                    </form>
        <div style="max-height: 350px; overflow:hidden;">    
        <img src="{{ asset('assets/img/kajianstudy/'.$kajianstudy->image) }}" class="img-fluid" alt="">
        </div>
        <p>{!! $kajianstudy->advantage !!}</p>
        <p>{!! $kajianstudy->body !!}</p>
        </div>
    </div>  
</div>
@endsection