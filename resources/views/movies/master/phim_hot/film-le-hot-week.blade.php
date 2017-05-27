<div class="right-box top-film-week">
    <h2 class="right-box-header star-icon"><span>Phim lẻ hot trong tuần</span></h2>
    <div class="right-box-content ">
        <ul class="list-top-movie slim-scroll" id="list-top-film-week">
            @foreach($phimlehot as $pl)
            <li class="list-top-movie-item">
                <a class="list-top-movie-link" title="{{ $pl->title }}" href="{{ URL::route('/phim',[$pl->id,$pl->alias]) }}">
                    <div class="list-top-movie-item-thumb" style="background-image: url('{{url('public/upload/images/250x360/'.$pl->image)}}')"  >
                    </div>
                    <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">{{ $pl->name_film }}</span><span class="list-top-movie-item-en">{{ $pl->name_english }}</span><span class="rate-vote rate-vote-9"></span>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>