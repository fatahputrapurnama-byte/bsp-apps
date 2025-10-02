@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New User</h1>
      </div>

      <div class="col-lg-8">
          <form method="post" action="{{ url('dashboard/user') }}" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old("name") }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old("email") }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old("password") }}" required>
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye fa-lg" id="togglePassword" aria-hidden="true" onclick="togglePassword(this.id)"></i></span>
                </div>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
              </div>
              <div class="form-group mb-md-0">
                  <!-- Peruntukan-->
                  <label for="is_admin">Admin</label><br>
                  <input type="radio" onchange="validasi()" id="is_admin" name="is_admin" value="1">
                  <label for="html">Ya</label><br>
                  <input type="radio" onchange="validasi()" id="is_admin" name="is_admin" value="0">
                  <label for="html">Bukan</label><br>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

      <script>
        function togglePassword(id){
                var password = document.getElementById("password");
                var togglePassword = document.getElementById(id);

                if (togglePassword.id === "togglePassword") {
                    if (password.type === "password") {
                        password.type = "text";
                        togglePassword.classList.remove("fa-eye");
                        togglePassword.classList.add("fa-eye-slash");
                    } else {
                        password.type = "password";
                        togglePassword.classList.remove("fa-eye-slash");
                        togglePassword.classList.add("fa-eye");
                    }
                }
            }
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