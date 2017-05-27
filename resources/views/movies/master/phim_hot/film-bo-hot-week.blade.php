  <div class="right-box top-film-week ">
   <h2 class="right-box-header star-icon"><span>Phim bộ hot trong tuần</span></h2>
   <div class="right-box-content">
    <ul class="list-top-movie slim-scroll" id="list-top-film-week">
        @foreach($phimbohot as $pb)
        <li class="list-top-movie-item">
            <a class="list-top-movie-link" title="{{ $pb->title }}" href="{{ URL::route('/phim',[$pb->id,$pb->alias]) }}">
               <div class="list-top-movie-item-thumb" style="background-image: url('{{ url('public/upload/images/250x360/'.$pb->image)  }}')"  >
               </div>
               <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">{{ $pb->name_film }}</span><span class="list-top-movie-item-en">{{ $pb->name_english }}</span><span class="rate-vote rate-vote-9"></span>
               
               </div>
           </a>
       </li>

       @endforeach

   </ul>
</div>
</div>