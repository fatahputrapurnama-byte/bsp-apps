<div class="row" id="data-news">
    @foreach ($data as $berita)
    <div class="col-lg-4 col-sm-6 mb-4">
        <!-- Portfolio item 1-->
        <div class="portfolio-item" style="max-height: 20%">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1" onclick="showNews({{ $berita }})">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="{{ asset('assets/img/news/' .$berita->image) }}" style="max-width: 100%; max-height:230px" alt="..." />
            </a>
            <div class="portfolio-caption">
                <div class="portfolio-caption-heading">{!! $berita->title !!}</div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="pagination-container" style="display: flex; justify-content: flex-end; align-items: center;">
    {{ $data->links() }}
    </div>
</div>