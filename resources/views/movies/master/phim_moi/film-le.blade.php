 <div class="last-film-box-wrapper">
    <ul class="last-film-box" id="movie-last-movie">
        @foreach($phimlemoi as $pl)
        <li class="wow fadeInUp">
            <a class="movie-item m-block" title="{{ $pl->title }}" href="{{ URL::route('/phim',[$pl->id,$pl->alias]) }}">
                <div class="block-wrapper-item">
                    <div class="movie-thumbnail ratio-box ratio-3_4">
                        <div class="public-film-item-thumb ratio-content"  style="background-image: url('{{'public/upload/images/250x360/'.$pl->image}}')" ></div>
                    </div>
                    <div class="movie-meta">
                        <div class="movie-title-1">{{$pl->name_film}}</div><span class="movie-title-2">{{ $pl->name_english }}</span><span class="movie-title-chap">{{ $pl->time  }}</span><span class="ribbon">{{ $pl->resolution }}</span></div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>