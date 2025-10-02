@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pelatihan</h1>
      </div>

      <div class="col-lg-8">
          <form method="post" action="{{ url('dashboard/pelatihan/'.$training->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
              <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old("title",$training->title) }}">
                  @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
              <div class="mb-3">
                  <label for="title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" autofocus value="{{ old("subtitle",$training->subtitle) }}">
                  @error('subtitle')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Upload Foto</label>
                  <input type="hidden" name="oldImage" value="{{ $training->image }}">
                  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                  @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="image_brosur" class="form-label">Upload Foto Brosur</label>
                  <input type="hidden" name="oldImageBrosur" value="{{ $training->image_brosur }}">
                  <input class="form-control @error('image_brosur') is-invalid @enderror" type="file" id="image_brosur" name="image_brosur">
                  @error('image_brosur')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="image_jadwal" class="form-label">Upload Foto jadwal</label>
                  <input type="hidden" name="oldImageJadwal" value="{{ $training->image_jadwal }}">
                  <input class="form-control @error('image_jadwal') is-invalid @enderror" type="file" id="image_jadwal" name="image_jadwal">
                  @error('image_jadwal')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
              <div class="mb-3">
                  <label for="category" class="form-label">Manfaat</label>
                    <input id="advantage" type="hidden" name="advantage" value="{{ old('advantage',$training->advantage) }}">
                    <trix-editor input="advantage"></trix-editor>
              </div>
              <div class="mb-3">
                  <label for="category" class="form-label">Body</label>
                    <input id="body" type="hidden" name="body" value="{{ old('body',$training->body) }}">
                    <trix-editor input="body"></trix-editor>
              </div>
              <div class="mb-3">
                  <label for="paket" class="form-label">Paket Pelatihan</label>
                    <input id="paket" type="hidden" name="paket" value="{{ old('paket',$training->paket) }}">
                    <trix-editor input="paket"></trix-editor>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

      <script>
          // const title = document.querySelector('#title');
          // const slug = document.querySelector('#slug');

          // title.addEventListener('change', function(){
          //     fetch('/dashboard/post/checkSlug?title=' + title.value)
          //     .then(response => response.json())
          //     .then(data => slug.value = data.slug)
          // });

          document.addEventListener('trix-file-accept', function(e){
              e.preventDefault();
          })

      </script>
@endsection