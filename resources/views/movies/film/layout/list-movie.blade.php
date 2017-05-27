<div class="movie-list-index related-box ">
                <h2 class="header-list-index"><span class="title-list-index">Có thể bạn cũng muốn xem</span></h2>
                <ul class="list-movie">
                    @foreach($thongtinphim as $ttp)
                    <li class="movie-item wow fadeInUp">
                        <a class="block-wrapper" title="" href="{{ URL::route('/phim',[$ttp->id,$ttp->alias])}}">
                            <div class="movie-thumbnail" style="background:url('{{ url('public/upload/images/250x360/'.$ttp->image)  }}'); background-size: cover;"></div>
                            <div class="movie-meta"><span class="movie-title-1">{{ $ttp->name_film }}</span><span class="movie-title-2">{{ $ttp->name_english }}</span></div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>