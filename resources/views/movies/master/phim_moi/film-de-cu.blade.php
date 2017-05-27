<div class="row top-movie wow pulse">
   <div class="col-lg-12">
      <h2 class="header-list-index" ><span class="title-list-index">Phim đề cử</span></h2>
      <div class="top-movie-list block-wrapper  " >
         <div class="list_carousel " >
            <ul id="movie-carousel-top"  >
               @foreach($phimdecu as $pdc)
               <li>
                  <a href="{{ URL::route('/phim',[$pdc->id,$pdc->alias]) }}" title="{{ $pdc->title }}">
                     <figure class="movie-carousel-top-item">
                        <img src="{{url('public/upload/images/250x360/'.$pdc->image) }}" alt="">
                        <figcaption class="movie-carousel-top-item-meta" >
                           <h3 class="movie-name-1">{{ $pdc->name_film }}</h3>
                           <h4 class="movie-name-2">{{ $pdc->name_english }}</h4>
                           <span class="ribbon" style="top:-235px;">{{ $pdc->resolution }}</span>
                        </figcaption>
                     </figure>
                  </a>
               </li>
               @endforeach
            </ul>
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>