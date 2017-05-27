<div class="block-movie-info movie-info-box">
                        <div class="row">
                            <div class="col-6 movie-detail">
                                @foreach($thongtinphim as $ttp)
                                <h1 class="movie-title"><span class="title-1">{{ $ttp->name_film }}</span><span class="title-2">{{ $ttp->name_english }}</span><span class="title-year"></span></h1>
                                @endforeach
                                <div class="movie-meta-info">
                                    @foreach($thongtinphim as $ttp)
                                    <dl>
                                    <dt class="movie-dt">Điểm IMDb:</dt>
                                        <dd class="movie-dd imdb">{{ $ttp->imdb }}</dd><dt class="movie-dt hidden">Số người đánh giá:</dt>
                                        <dd class="movie-dd">(31,094 votes)</dd><br><dt class="movie-dt">Đạo diễn:</dt><dd class="movie-dd dd-director"><a class="director" href="ho-so/kishimoto-masashi-18071/" title="Kishimoto Masashi">{{ $ttp->directory }}</a></dd><br>
                                        <dt class="movie-dt">Năm:</dt>
                                        <dd class="movie-dd dd-year"><a class="country" href="quoc-gia/jp/" title="Phim Nhật Bản">{{ $ttp->year }}</a></dd><br><dt class="movie-dt">Quốc gia:</dt>
                                        <dd class="movie-dd dd-country"><a class="country" href="quoc-gia/jp/" title="Phim Nhật Bản">{{ $ttp->name_country }}</a></dd><br><dt class="movie-dt">Thời lượng:</dt>
                                        <dd class="movie-dd">{{ $ttp->time }}</dd><br>
                                         <dt class="movie-dt">Chất lượng:</dt>
                                        <dd class="movie-dd">{{ $ttp->quality }}</dd><br> 
                                        <dt class="movie-dt">Độ phân giải:</dt>
                                        <dd class="movie-dd">{{ $ttp->resolution }}</dd><br><dt class="movie-dt">Thể loại:</dt>
                                        <dd class="movie-dd dd-cat"><a class="category" href="the-loai/phim-hanh-dong/" title="Phim hành động">{{ $ttp->type }}</a></dd>
                                    </dl>
                                    @endforeach
                                    <div class="clear"></div>
                                </div>
                                <div class="box-rating" itemscope="" itemtype="https://schema.org/TVSeries "><input id="hint_current" type="hidden" value=""><input id="score_current" type="hidden" value="8.8">
                                    <p>Đánh giá phim <span class="num-rating">(1260 lượt)</span></p>
                                    <div class="rateit"></div>
                                                                      
                                </div>
                            </div>
                            <div class="col-6 movie-image">
                                <div class="movie-l-img"><img alt="" src="{{ url('public/upload/images/450x600/'.$ttp->image) }}">
                                    <h2 class="hidden">Xem phim</h2>
                                    <ul class="btn-block">
                                      
                                        <li class="item"><a id="btn-film-trailer" class="initialism fadeandscale_open btn btn-primary" title="Trailer Naruto Shippuden - Naruto Shippuuden" href=" " data-videourl="https://www.youtube.com/watch?v=SPuhxAu4uCs">Trailer</a></li>
                                        
                                        <li class="item"><a id="btn-film-watch" class=" initialism  btn btn-red" title="Xem phim Naruto Shippuden - Naruto Shippuuden" href="{{ URL::route('/phim/xemphim',[$ttp->film_id,$ttp->alias]) }}" 
                                        ">Xem Phim</a></li>
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

  @include('movies/film/layout.trailer')
 