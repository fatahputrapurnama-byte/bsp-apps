@extends('layout.main')

@section('container')
    <header class="masthead" style="background-image: url('../assets/img/konsultasi/{{ $consultationDetail->image }}');">
        <div class="container">
            {{-- <div class="masthead-subheading">Welcome fellas!</div> --}} <br><br>
            <div class="masthead-heading text-uppercase">{{ $consultationDetail->title }}</div>
            <h2>{{ $consultationDetail->subtitle }}</h2>
            {{-- <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Tell Me More</a> --}}
        </div>
    </header>
    <div class="container mt-3">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-4" style="text-align:justify;">
                <h4 style="text-align:left;">{{ $consultationDetail->title }}</h4>
                <p>
                    {!! $consultationDetail->body !!}
                </p>
            </div>
            <div class="col-sm-4" style="text-align:justify;">
                <h4>Manfaat</h4>
                {!! $consultationDetail->advantage !!}
            </div>
            <div class="col-sm-4" style="text-align:justify;">
                <table border="1" style="width:90%">
                    <th style="background-color: #0071c2; padding:10px;">
                        <h4>Paket Konsultansi</h4>
                    </th>
                    <tr>
                        <td style="padding: 15px; background-color:aliceblue">
                            <div class="">
                              <p align="justify">{!! $consultationDetail->paket !!}</p>
                              <a href="https://api.whatsapp.com/send?phone=6282240022727&amp;text=Saya%20ingin%20tahu%20lebih%20lanjut%20tentang%20layanan%20dari%20Bina%20Solusi%20Purnama" class="mad_button" target="_blank"><button class="btn btn-primary btn-l text-uppercase" id="submitButton" type="submit"><i class="fab fa-whatsapp" aria-hidden="true"></i> Hubungi Kami</button></a>
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <table border="1" style="background-color: aliceblue; width:90%">
                    <th style="padding:15px;">
                        <h3 style="margin-top: 30px;"><strong>Unduhan</strong></h3>
                    </th>
                    <tr>
                        <td style="padding: 15px; background-color:aliceblue">
                            <div style="margin-bottom: 30px;">
                                <a href="{{ asset('assets/img/konsultasi/brosur/' .$consultationDetail->image_brosur ) }}" target="_blank">
                                <button class="btn btn-primary btn-l text-uppercase" id="submitButton" type="submit">Unduh Brosur</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" oninput="validasi()" name="name" id="name" type="text" placeholder="Your Name *" required/>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" oninput="validasi()" name="email" id="email" type="email" placeholder="Your Email *" required />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" oninput="validasi()" name="phone" id="phone" type="tel" placeholder="Your Phone *" required/>
                            <div class="invalid-feedback">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" oninput="validasi()" name="message" id="message" placeholder="Your Message *" required></textarea>
                            <div class="invalid-feedback">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div style="display: none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Berhasil</div>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" disabled id="submitButtonMessage" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <a href="https://api.whatsapp.com/send?phone=6282240022727&amp;text=Saya%20ingin%20tahu%20lebih%20lanjut%20tentang%20layanan%20dari%20Bina%20Solusi%20Purnama" class="mad_button" target="_blank" style="position:fixed; right:30px; bottom:30px; z-index:9999;"><img src="{{ asset('assets/wa.png') }}" alt="wa" style="max-height: 60px;"></a>
    @section('script')
    <script>
        function validasi(){
                var name = $('#name').val();
                var email = $('#email').val();
                var no_hp = $('#phone').val();
                var pesan = $('#message').val();

                if (name && email && no_hp && pesan) {
                    $('#submitButtonMessage').prop('disabled', false);
                }
            }
            
            $("#contactForm").submit(function(e){
                e.preventDefault();
                contact();
            });

            function contact(){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.ajax({
                    type:'POST',
                    url:"{{ route('contact') }}",
                    data:{
                        name: $('#name').val(),
                        email: $('#email').val(),
                        no_hp: $('#phone').val(),
                        pesan: $('#message').val()
                    },
                    success:function(data) {
                        $('#submitSuccessMessage').show();
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#message').val('');
                    },
                    error: function(err) {
                        alert("Gagal!");
                    }
                });
            }
    </script>
    @endsection
@endsection