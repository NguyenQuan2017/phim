 <div class="list-movie-filter" style="margin-bottom: 10px;">
    <div class="list-movie-filter-main">
        <form id="form-filter" class="form-inline" method="GET" action="filter/">
            <div class="list-movie-filter-item">
                <label for="filter-sort">Sắp xếp</label>
                <select class="form-control" id="filter-sort" name="sort">
                    <option value="updatetime">Thời gian cập nhật</option>
                    <option value="posttime">Thời gian đăng</option>
                    <option value="year">Năm sản xuất</option>
                </select>
            </div>
            <div class="list-movie-filter-item">
                <label for="filter-eptype">Hình thức</label>
                <select class="form-control" id="filter-eptype" name="eptype">
                    <option value="">Tất cả</option>
                    <option value="single">Phim lẻ</option>
                    <option value="serial">phim bộ</option>
                    <option value="theater">Phim chiếu rạp</option>
                    <option value="classic">Phim kinh điển</option>
                </select>
            </div>
            <div class="list-movie-filter-item">
                <label for="filter-language">Ngôn ngữ</label>
                <select class="form-control" id="filter-language" name="language">
                    <option value="">Tất cả</option>
                    <option value="vietnam">Tiếng Việt</option>
                    <option value="illustrate">Thuyết minh</option>
                    <option value="dubbing">Lồng tiếng</option>
                    <option value="subtitle">ViệtSub</option>
                </select>
            </div>
            <div class="list-movie-filter-item">
                <label for="filter-category">Thể loại</label>
                <select id="filter-category" name="category" class="form-control">
                    <option value="">Tất cả</option>
                    
                    <option data-slug="phim-hanh-dong" value="1" selected="">Phim hành động</option>
                    
                    <option data-slug="phim-vien-tuong" value="7">Phim viễn tưởng</option>
                    
                    <option data-slug="phim-chien-tranh" value="8">Phim chiến tranh</option>
                    
                    <option data-slug="phim-hinh-su" value="9">Phim hình sự</option>
                    
                    <option data-slug="phim-phieu-luu" value="10">Phim phiêu lưu</option>
                    
                    <option data-slug="phim-hai-huoc" value="6">Phim hài hước</option>
                    
                    <option data-slug="phim-vo-thuat" value="2">Phim võ thuật</option>
                    
                    <option data-slug="phim-kinh-di" value="5">Phim kinh dị</option>
                    
                    <option data-slug="phim-hoi-hop-gay-can" value="18">Phim hồi hộp-Gây cấn</option>
                    
                    <option data-slug="phim-bi-an-sieu-nhien" value="20">Phim Bí ẩn-Siêu nhiên</option>
                    
                    <option data-slug="phim-co-trang" value="15">Phim cổ trang</option>
                    
                    <option data-slug="phim-than-thoai" value="16">Phim thần thoại</option>
                    
                    <option data-slug="phim-tam-ly" value="11">Phim tâm lý</option>
                    
                    <option data-slug="phim-tai-lieu" value="12">Phim tài liệu</option>
                    
                    <option data-slug="phim-tinh-cam-lang-man" value="17">Phim tình cảm-Lãng mạn</option>
                    
                    <option data-slug="phim-chinh-kich-drama" value="19">Phim chính kịch - Drama</option>
                    
                    <option data-slug="phim-the-thao-am-nhac" value="13">Phim Thể thao-Âm nhạc</option>
                    
                    <option data-slug="phim-gia-dinh" value="14">Phim gia đình</option>
                    
                    <option data-slug="phim-hoat-hinh" value="4">Phim hoạt hình</option>
                    
                </select>
            </div>
            <div class="list-movie-filter-item">
                <label for="filter-country">Quốc gia</label>
                <select class="form-control" id="filter-country" name="country">
                    <option value="">Tất cả</option>
                    
                    
                    <option value="vn">Việt Nam</option>
                    
                    
                    
                    <option value="cn">Trung Quốc</option>
                    
                    
                    
                    <option value="us">Mỹ</option>
                    
                    
                    
                    <option value="kr">Hàn Quốc</option>
                    
                    
                    
                    <option value="jp">Nhật Bản</option>
                    
                    
                    
                    <option value="hk">Hồng Kông</option>
                    
                    
                    
                    <option value="in">Ấn Độ</option>
                    
                    
                    
                    <option value="th">Thái Lan</option>
                    
                    
                    
                    <option value="fr">Pháp</option>
                    
                    
                    
                    <option value="tw">Đài Loan</option>
                    
                    
                    
                    <option value="au">Úc</option>
                    
                    
                    
                    <option value="uk">Anh</option>
                    
                    
                    
                    <option value="ca">Canada</option>
                    
                </select>
            </div>
            <div class="list-movie-filter-item">
                <label for="filter-year">Năm phát hành</label>
                <select id="filter-year" name="year" class="form-control">
                    <option value="">Tất cả</option>
                    
                    <option value="2017">2017</option>
                    
                    <option value="2016">2016</option>
                    
                    <option value="2015">2015</option>
                    
                    <option value="2014">2014</option>
                    
                    <option value="2013">2013</option>
                    
                    <option value="-2013">Trước 2013</option>
                </select>
            </div>
            <button type="submit" id="btn-movie-filter" class="btn btn-red btn-filter-movie"><span>Duyệt phim</span></button>
            <div class="clear"></div>
        </form>
    </div>
</div>