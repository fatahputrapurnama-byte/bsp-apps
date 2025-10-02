@extends('layout.main')

@section('container')
<header class="masthead" style="background-image: url('../assets/img/header-bg.jpg');">
    <div class="container">
        {{-- <div class="masthead-subheading">Welcome fellas!</div> --}}
        <div class="masthead-heading text-uppercase">LAYANAN</div>
        {{-- <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Tell Me More</a> --}}
    </div>
</header>
<div class="container mt-5">
    <div class="row" id="row-tetap" style="padding: 10px;">
        <div class="col-4" id="col-phone">
            <table class="table table-light" border="1" id="tabel-tetap">
                <tr>
                    <td style="padding: 10px;"><a href="#pelatihan" style="text-decoration: none;"><h3>PELATIHAN</h3></a></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"><a href="#konsultasi" style="text-decoration: none;"><h3>KONSULTASI</h3></a></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"><a href="#auditing" style="text-decoration: none;"><h3>AUDITING</h3></a></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"><a href="#bimtek" style="text-decoration: none;"><h3>BIMTEK</h3></a></td>
                </tr>
                <tr>
                    <td style="padding: 10px;"><a href="#kajianstudy" style="text-decoration: none;"><h3>KAJIAN & STUDY</h3></a></td>
                </tr>
            </table>
        </div>
        <div class="col-8" id="">
            <section id="pelatihan" style="padding: 0px;">
            <h2>PELATIHAN</h2>
            @foreach ($training as $row)
            <div class="card" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="card-img" src="{{ asset('assets/img/training/'.$row->image) }}" style="max-height:230px" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <p class="card-text">{!! Str::limit($row->body, 100, '...') !!}</p>
                            <a href="/pelatihan/{{ $row->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </section>

            <section id="konsultasi" style="padding: 0px;">
            <h2 class="mt-3">KONSULTASI</h2>
            @foreach ($consultation as $row)
            <div class="card" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="card-img" src="{{ asset('assets/img/konsultasi/'.$row->image) }}" style="max-height:230px" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <p class="card-text">{!! Str::limit($row->body, 100, '...') !!}</p>
                            <a href="/konsultasi/{{ $row->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </section>

            <section id="auditing" style="padding: 0px;">
            <h2 class="mt-3">AUDITING</h2>
            @foreach ($auditing as $row)
            <div class="card" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="card-img" src="{{ asset('assets/img/auditing/'.$row->image) }}" style="max-height:230px" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <p class="card-text">{!! Str::limit($row->body, 100, '...') !!}</p>
                            <a href="/auditing/{{ $row->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </section>

            <section id="bimtek" style="padding: 0px;">
            <h2 class="mt-3">BIMTEK</h2>
            @foreach ($bimtek as $row)
            <div class="card" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="card-img" src="{{ asset('assets/img/bimtek/'.$row->image) }}" style="max-height:230px" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <p class="card-text">{!! Str::limit($row->body, 100, '...') !!}</p>
                            <a href="/bimtek/{{ $row->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </section>

            <section id="kajianstudy" style="padding: 0px;">
            <h2 class="mt-3">KAJIAN & STUDY</h2>
            @foreach ($kajianstudy as $row)
            <div class="card" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="card-img" src="{{ asset('assets/img/kajianstudy/'.$row->image) }}" style="max-height:230px" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <p class="card-text">{!! Str::limit($row->body, 100, '...') !!}</p>
                            <a href="/kajianstudy/{{ $row->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </section>
        </div>
    </div>
</div>
    
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>

    <a href="https://api.whatsapp.com/send?phone=6282240022727&amp;text=Saya%20ingin%20tahu%20lebih%20lanjut%20tentang%20layanan%20dari%20Bina%20Solusi%20Purnama" class="mad_button" target="_blank" style="position:fixed; right:50px; bottom:50px; z-index:9999;"><img src="{{ asset('assets/wa.png') }}" alt="wa" style="max-height: 60px;"></a>
    <style>
      .bcontent {
            margin-top: 10px;
        }
        @media screen and (max-width: 600px) {
        .container {
            /* Aturan CSS untuk layar dengan lebar kurang dari 600px */
            /* Misalnya, mengatur padding atau margin yang lebih kecil */
        }

        .col-4 {
            /* Aturan CSS untuk tabel pada layar dengan lebar kurang dari 600px */
            /* Misalnya, mengatur ukuran font yang lebih kecil atau mengubah tata letak */
            /* font-size: 14px; */
            /* margin: 10px; */
            width: 100%;
        }

        .col-8 {
            width: 100%;
        }

        /* #tabel-tetap {
            width: 100%;
        } */
        }
    </style>
    @section('script')
    <script>
        function handleScroll(event) {
            console.log('discroll');
            var container = event.target;
            var table = container.querySelector('#table-tetap');

            if (container.scrollTop >= 50) {
                table.style.position = 'fixed';
                table.style.top = '50px';
            } else {
                table.style.position = 'absolute';
                table.style.top = '50px';
            }
        }
    </script>
    @endsection
@endsection