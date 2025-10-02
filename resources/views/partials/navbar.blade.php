<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/logo-bsp-transparan.png') }}" alt="..." height="150px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                {{-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">Tentang Kami</a></li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">  Services  </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#"> PELATIHAN &nbsp;&nbsp; <span class="sub-arrow">
                            <i class="fas fa-angle-right"></i></span></a>
                            <ul class="submenu dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                                <li><a class="dropdown-item" href="/pelatihan1">pelatihan item 1</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 2</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 3 </a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 4</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                                <li><a class="dropdown-item" href="#">pelatihan item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Jasa Konsultasi » </a>
                            <ul class="submenu dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                                <li><a class="dropdown-item" href="#">konsultasi item 1</a></li>
                                <li><a class="dropdown-item" href="#">konsultasi item 2</a></li>
                                <li><a class="dropdown-item" href="#">konsultasi item 4</a></li>
                                <li><a class="dropdown-item" href="#">konsultasi item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> JASA AUDITING »</a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">AUDITING item 1</a></li>
                                <li><a class="dropdown-item" href="#">AUDITING item 2</a></li>
                                <li><a class="dropdown-item" href="#">AUDITING item 4</a></li>
                                <li><a class="dropdown-item" href="#">AUDITING item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> BIMTEK » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">BIMTEK item 1</a></li>
                                <li><a class="dropdown-item" href="#">BIMTEK item 2</a></li>
                                <li><a class="dropdown-item" href="#">BIMTEK item 4</a></li>
                                <li><a class="dropdown-item" href="#">BIMTEK item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> KAJIAN & STUDY » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 1</a></li>
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 2</a></li>
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 4</a></li>
                                <li><a class="dropdown-item" href="#">KAJIAN & STUDY item 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" aria-expanded="false">Pelatihan</a>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                        @foreach($training as $row)
                        <li><a class="dropdown-item" href="/pelatihan/{{ $row->id }}">{{ $row->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" aria-expanded="false">Konsultasi</a>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                        @foreach($consultation as $row)
                        <li><a class="dropdown-item" href="/konsultasi/{{ $row->id }}">{{ $row->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" aria-expanded="false"> Auditing </a>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                        @foreach($auditing as $row)
                        <li><a class="dropdown-item" href="/auditing/{{ $row->id }}">{{ $row->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" aria-expanded="false"> Bimtek </a>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                        @foreach($bimtek as $row)
                        <li><a class="dropdown-item" href="/bimtek/{{ $row->id }}">{{ $row->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" aria-expanded="false"> Kajian & Study </a>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                        @foreach($kajianstudy as $row)
                        <li><a class="dropdown-item" href="/kajianstudy/{{ $row->id }}">{{ $row->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/#portfolio') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/#team') }}">Klien</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
            </ul>
                </div>
            </div>
        </nav>
<style>
    @media (max-width: 700px) {
        .navbar-nav{
            overflow-y: scroll; 
            height:95vh;
        }
    }
</style>