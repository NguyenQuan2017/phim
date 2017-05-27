  <div class="last-film-box-wrapper">
    <ul class="last-film-box" id="movie-last-series">
        @foreach($phimbomoi as $pb)
        <li class="wow fadeInUp">
            <a class="movie-item m-block" title="{{ $pb->title }}" href="{{ URL::route('/phim',[$pb->id,$pb->alias]) }}">
                <div class="block-wrapper">
                    <div class="movie-thumbnail ratio-box ratio-3_4">
                        <div class="public-film-item-thumb ratio-content" style="background-image: url('{{'public/upload/images/250x360/'.$pb->image}}')"  ></div>
                    </div>
                    <div class="movie-meta">
                        <div class="movie-title-1">{{ $pb->name_film }}</div><span class="movie-title-2">{{ $pb->name_english }}</span><span class="movie-title-chap">{{ $pb->time }} </span><span class="ribbon">{{ $pb->resolution }}</span></div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>