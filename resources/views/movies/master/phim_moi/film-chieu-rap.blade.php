<div class="last-film-box-wrapper">
    <ul class="last-film-box " id="movie-last-theater">
        @foreach($phimchieurap as $phcr)
        <li class="wow fadeInUp">
            <a class="movie-item m-block" title="{{ $phcr->title }}" href="{{URL::route('/phim',[$phcr->id,$phcr->alias])}}">
                <div class="block-wrapper-item">

                    <div class="movie-thumbnail ratio-box ratio-3_4">
                        <div class="public-film-item-thumb ratio-content" style="background-image: url('{{'public/upload/images/250x360/'.$phcr->image}}')">
                        </div>
                    </div>
                    <div class="movie-meta">
                        <div class="movie-title-1">{{ $phcr->name_film }}</div><span class="movie-title-2">{{$phcr->name_english}}</span><span class="movie-title-chap">{{ $phcr->time }} </span>
                        <span class="ribbon">{{ $phcr->resolution }}</span></div>

                </div>


            </a>
        </li>

        @endforeach

    </ul>
    <div class="clear"></div>
</div>