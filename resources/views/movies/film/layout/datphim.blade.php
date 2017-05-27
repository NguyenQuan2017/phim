
<div style="overflow: hidden" id="slide1"  class="well">
  <h2>ĐẶT PHIM</h2>
  <form>
    <div class="form-group">
      <label >T</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label >Số điện thoại</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password">
    </div>
        <div class="form-group">
      <label >Loaị phòng</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
     <div class="form-group">
      <label >Thành Phố</label>
      	<select name="" id="">
      		<option value="1">Đà Nẵng</option>
      	</select>
    </div>
        <div class="form-group">
      <label >Rạp Chiếu</label>
		<select name="" id="">
			<option value="1">CGV</option>

		</select>
    </div>
  
    <button type="submit" class="btn btn-default">Xác nhận</button>
  </form>
 </div> 



<style>

select{
	width:100%;
}
#slide_background {
    -webkit-transition: all 0.3s 0.3s;
       -moz-transition: all 0.3s 0.3s;
            transition: all 0.3s 0.3s;
}
#slide,
#slide_wrapper {
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
            transition: all 0.4s;
}
#slide {
    -webkit-transform: translateX(0) translateY(-40%);
       -moz-transform: translateX(0) translateY(-40%);
        -ms-transform: translateX(0) translateY(-40%);
            transform: translateX(0) translateY(-40%);
}
.popup_visible #slide {
    -webkit-transform: translateX(0) translateY(0);
       -moz-transform: translateX(0) translateY(0);
        -ms-transform: translateX(0) translateY(0);
            transform: translateX(0) translateY(0);
}
.well {
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        display:none;
        margin:1em;
    }
</style>
