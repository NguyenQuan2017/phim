<div class="right-box top-film-week  ">
    <h2 class="right-box-header star-icon"><span>Trailer phim mới</span></h2>
    <div class="right-box-content">
        <ul class="list-top-movie slim-scroll" id="list-top-film-week">
            @foreach($phimtrailer as $trailer)
            <li class="list-top-movie-item">
                <a class="list-top-movie-link" title="{{  $trailer->title }}" href="{{ URL::Route('/phim',[$trailer->id,$trailer->alias]) }}">
                    <div class="list-top-movie-item-thumb" style="background-image: url('{{url('public/upload/images/250x360/'. $trailer->image)}}')" ></div>
                    <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">{{  $trailer->name_film }}</span><span class="list-top-movie-item-en">{{  $trailer->name_english }}</span><span class="rate-vote rate-vote-10"></span></div>
                </a>
            </li>
            @endforeach 
        </ul>
    </div>
</div>