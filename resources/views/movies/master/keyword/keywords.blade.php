    <div class="right-box  ">
        <h2 class="right-box-header tag-icon ">
            <span>Từ khóa nổi bật</span>
        </h2>
        <ul class="right-box-content tag-box">
            @foreach($tag as $item)
            <li class="tag-item"><a class="tag-link" title="tvb" href="">{{ $item['name_tag'] }}</a><span class="tag-end">&nbsp;</span></li>
            @endforeach
           

        </ul>
    </div>