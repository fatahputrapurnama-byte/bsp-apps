@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
      </div>

      <div class="col-lg-8">
          <form method="post" action="{{ url('dashboard/client') }}" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old("name") }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Upload Image</label>
                  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                  <img class="img-preview img-fluid mt-3" id="frame" width="100px" height="100px">
                  @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
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

          function previewImage() {

            frame.src=URL.createObjectURL(event.target.files[0]);
            // const image = document.querySelector('#image');
            // const imgPreview = document.querySelector('.img-preview');

            // imgPreview.style.display = 'block';

            // const oFReader = new FileReader();
            // oFReader.readAsDataURL(image.files[0]);

            // oFReader.onLoad = function(oFREvent) {
            //   imgPreview.src = oFREvent.targer.result;
            // }
          }
      </script>
@endsection