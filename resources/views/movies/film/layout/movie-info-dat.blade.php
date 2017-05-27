<div class="block-movie-info movie-info-box wow fadeInDown ">
                        <div class="row">
                        
                            <div class="col-6 movie-detail">
                                @foreach($phim as $ph)
                                <h1 class="movie-title"><span class="title-1">{{$ph->TEN_PHIM}}</span><span class="title-2">{{ $ph->TEN_TIENG_ANH }}</span></h1>
                                @endforeach
                                    
                                <div class="movie-meta-info">
                                @foreach($thongtinphim as $ttp)
                                    
                                <dl>
                                        
                                        <dt class="movie-dt">Điểm IMDb:</dt>
                                        <dd class="movie-dd imdb">{{ $ttp->IMDB }}</dd><br>
                                        <dt class="movie-dt">Đạo diễn:</dt>
                                        <dd class="movie-dd dd-director"><a class="director" href="ho-so/date-hayato-18072/" title="Date Hayato">{{ $ttp->DAO_DIEN }}</a> </dd>
                                        <br>
                                        <dt class="movie-dt">Năm:</dt>
                                        <dd class="movie-dd dd-director"><a class="director" href="ho-so/date-hayato-18072/" title="Date Hayato">{{ $ttp->nam }}</a> </dd>
                                        <br>
                                        <dt class="movie-dt">Quốc gia:</dt>
                                        <dd class="movie-dd dd-country"><a class="country" href="quoc-gia/jp/" title="Phim Nhật Bản"> {{ $ttp->QUOC_GIA }}</a>, </dd><br><dt class="movie-dt">Thời lượng:</dt>
                                        <dd class="movie-dd">{{$ttp->THOI_LUONG}}</dd><br><dt class="movie-dt">Độ phân giải:</dt>
                                        <dd class="movie-dd"></dd><br><dt class="movie-dt">Thể loại:</dt>
                                        <dd class="movie-dd dd-cat"><a class="category" href="the-loai/phim-hanh-dong/" title="Phim hành động">{{$ttp->THE_LOAI}}</a><br><dt class="movie-dt">Công ty SX:</dt>
                                        <dd class="movie-dd">{{$ttp->CTY_SAN_XUAT}}</dd><br>
                                    @endforeach
                                    
                                </dl>

                                 <div class="clear"></div>

                                </div>

                                <div class="box-rating" itemscope="" itemtype="https://schema.org/TVSeries "><input id="hint_current" type="hidden" value=""><input id="score_current" type="hidden" value="8.8">
                                    <p>Đánh giá phim <span class="num-rating">(1260 lượt)</span></p>
                                  
                                </div>
                              
                            </div>
                            <div class="col-6 movie-image">
                                <div class="movie-l-img">
                                @foreach($thongtinphim as $ttp)
                                <img alt="" src="{{url('resources/upload/images/info/'.$ttp->HINH_ANH)}}">
                                @endforeach
                                    <h2 class="hidden">Xem phim</h2>
                                    <ul class="btn-block">
                                      
                                        <li class="item"><a id="btn-film-trailer" class="initialism fadeandscale_open btn btn-primary" title="Trailer Naruto Shippuden - Naruto Shippuuden" href=" " >Trailer</a></li>
                                        <li class="item"><a id="btn-film-watch" class=" initialism slide_open btn btn-red" title="Xem phim Naruto Shippuden - Naruto Shippuuden" href=" 
                                        ">Đặt Phim</a></li>
                                    </ul>
                                </div>
                                <!-- Bookmark-->
                                <div class="tools-box">
                                    <div class="tools-box-bookmark normal" data-filmid="2297" style="display:none"><span class="bookmark-status"></span><span class="bookmark-action"></span></div>
                                </div>
                                <!-- // Bookmark-->
                            </div>
                          
                        </div>
</div>
  @include('movies/movie/layout.trailer')
  @include('movies/movie/layout.datphim')