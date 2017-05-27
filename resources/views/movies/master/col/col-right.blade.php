   
<div class="col-right wow fadeInDown">
    <div id="tabs-movie">
        <ul class=" nav nav-tabs">
            <li ><a data-toggle="tab" href="#tabs_1">Phim lẻ mới</a></li>
            <li ><a data-toggle="tab" href="#tabs_2">Phim bộ mới</a></li>
            <li ><a data-toggle="tab" href="#tabs_3" >Phim bộ full</a></li>
        </ul>
        <div class="clear"></div>
        <div class="tab-content">
            <h2 class="hidden">Phim lẻ mới</h2>
            <ul class=" tab-content tab-pane fade in active" id="tabs_1">
                @foreach($phimlemoi as $pl)
                <li class="movie">
                    <a class="movie-link" title="{{ $pl->title }}" href="{{ url('/movie/movie_view',$pl->id) }}">
                        <div class="thumbn" style="background-image: url('{{'public/upload/images/250x360/'.$pl->image}}')"  ></div>
                        <div class="meta"><span class="name-vn link">{{ $pl->name_film }}</span><span class="name-en">{{ $pl->name_english }}</span></div>
                    </a>
                    <div class="eps">{{ $pl->time }}</div>
                    <div class="clear"></div>
                </li>
                @endforeach
                
            </ul>
            <h2 class="hidden" >Phim bộ mới</h2>
            <ul class="tab-content tab-pane fade " id="tabs_2">
             @foreach($phimbomoi as $pb)
             <li class="movie">
                <a class="movie-link" title="{{ $pb->title }}" href="{{ url('/movie/movie_view',$pb->id) }}">
                    <div class="thumbn" style="background-image: url('{{'public/upload/images/250x360/'.$pb->image}}')"  ></div>
                    <div class="meta"><span class="name-vn link">{{ $pb->name_film }}</span><span class="name-en">{{ $pb->name_english }}</span></div>
                </a>
                <div class="eps">{{ $pb->time }}</div>
                <div class="clear"></div>
            </li>
            @endforeach
            
        </ul> 
        <div class="clear"></div>
        <h2 class="hidden">Phim bộ mới hoàn thành</h2>
        <ul class="tab-content tab-pane fade" id="tabs_3">
         @foreach($phimbomoi as $pb)
         <li class="movie">
            <a class="movie-link" title="{{ $pb->title }}" href="{{ url('/movie/movie_view',$pb->id) }}">
                <div class="thumbn" style="background-image: url('{{'public/upload/images/250x360/'.$pb->image}}')"  ></div>
                <div class="meta"><span class="name-vn link">{{ $pb->name_film }}</span><span class="name-en">{{ $pb->name_english }}</span></div>
            </a>
            <div class="eps">{{ $pb->time }}</div>
            <div class="clear"></div>
        </li>
        @endforeach
        
        
    </ul> 
</div>
<div class="clear"></div>
</div>
</div>
