
<div class="last-film-box-wrapper">
    <ul class="last-film-box" id="movie-last-cartoon">
        @foreach($phimhoathinh as $phh)
        <li class="wow fadeInUp">
            <a class="movie-item m-block" title="{{ $phh->title }}" href="{{ URL::Route('/phim',[$phh->id,$phh->alias]) }}">
                <div class="block-wrapper-item">
                    <div class="movie-thumbnail ratio-box ratio-3_4">
                        <div class="public-film-item-thumb ratio-content" style="background-image: url('{{'public/upload/images/250x360/'.$phh->image }}')"  >

                        </div>
                    </div>
                    <div class="movie-meta">
                        <div class="movie-title-1">{{ $phh->name_film }}</div><span class="movie-title-2">{{ $phh->name_english  }}</span><span class="movie-title-chap">{{$phh->time}} </span><span class="ribbon">{{ $phh->resolution }}</span>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
        
    </ul>
    <div class="clear"></div>
</div>