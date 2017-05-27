<div class="block-actors wow fadeInUp">
                        <h2 class="movie-detail-h2">Diễn viên</h2>
                        <ul class="row" id="list_actor_carousel">
                            @foreach($dienvien as $dv)
                            <li>
                                <a class="actor-profile-item" href="ho-so/noriaki-sugiyama-1403/" title="Noriaki Sugiyama trong vai Sasuke Uchiha">
                                    <div class="actor-image" style="background-image:url('{{ url('public/upload/images/dienvien/'.$dv->image)  }}')"></div>
                                    <div class="actor-name"><span class="actor-name-a">{{ $dv->name_actor }}</span><span class="character">{{ $dv->role_name }}</span></div>
                                </a>
                            </li>
                            @endforeach
                     
                        </ul>
                        <div class="clear"></div>
                        <a id="prevActor" class="prev" rel="nofollow"><span class="arrow-icon left"></span></a><a id="nextActor" class="next" rel="nofollow"><span class="arrow-icon right"></span></a>
                    </div>