var subscribeEventSetter={'subscribeClick':null,'formSubmit':null,'unsubscribeClick':null};
jQuery(document).ready(function(){
	//--Khi form vừa load lên thì đặt giá trị mặc định vào
	subscribeEventSetter.formReady=function(){
		if(!fx.localStorage.check())
			return false;
		if(jQuery('#subscribe-email').length==0)
		{
			console.error("Không tìm thấy: #subscribe-email");
			return false;
		}
		if(jQuery('#subscribe-fullname').length==0)
		{
			console.error("Không tìm thấy: #subscribe-fullname");
			return false;
		}
		var email=jQuery.trim(jQuery('#subscribe-email').val());
		var fullname=jQuery.trim(jQuery('#subscribe-fullname').val());
		if(email=="")
			jQuery('#subscribe-email').val(fx.localStorage.get("subscribeEmail"));
		if(fullname=="")
			jQuery('#subscribe-fullname').val(fx.localStorage.get("subscribeFullname"));
	}
	//--Khi người dùng click nút đăng ký thì load form lên
	subscribeEventSetter.subscribeClick=function(){
		jQuery('#btn-subscribe').click(function(){
			var targetUrl=jQuery(this).attr('href');
			if(typeof targetUrl=="string")
			{
				targetUrl+="?_fxAjax=1&_fxResponseType=JSON";
			}
			else
			{
				console.error("Không xác định được targetUrl");
				return false;
			}
			fx.scrollTo('#subscribe-wrapper');
			jQuery.ajax({
				'url':targetUrl,
				'type':'GET',
				'dataType':'JSON'
			}).done(function(data){
				if(data._fxStatus)
				{
					jQuery('#subscribe-wrapper').append(data._fxHtml);
					
					jQuery('#subscribe-button').slideUp('fast',function(){
						jQuery(this).remove();
					});
					
					jQuery('#subscribe-form').slideDown('fast',function(){
						subscribeEventSetter.formReady();
						subscribeEventSetter.formSubmit();
					});
					
				}
			});
			return false;
		});
	};
	
	//--Khi người dùng submit form để đăng ký
	subscribeEventSetter.formSubmit=function(){
		jQuery('#form-film-subscribe').submit(function(){
			//--valid
			var email=jQuery.trim(jQuery('#subscribe-email').val());
			var fullname=jQuery.trim(jQuery('#subscribe-fullname').val());
			if(email=="")
			{
				alert('Bạn chưa nhập email của bạn.');
				jQuery('#subscribe-email').focus();
				return false;
			}
			fx.localStorage.set('subscribeEmail',email);
			if(fullname=="")
			{
				alert('Bạn chưa nhập tên của bạn.');
				jQuery('#subscribe-fullname').focus();
				return false;
			}
			fx.localStorage.set('subscribeFullname',fullname);
			if(jQuery('#subscribe-verify').val()=="")
			{
				alert('Bạn chưa nhập mã xác nhận.');
				jQuery('#subscribe-verify').focus();
				return false;
			}
			var formData=jQuery(this).serialize();
			var targetUrl=jQuery(this).attr('action');
			jQuery.ajax({
				'url':targetUrl+"?_fxAjax=1&_fxResponseType=JSON",
				'type':'POST',
				'dataType':'JSON',
				'data':formData
			}).done(function(data){
				if(data._fxStatus)
				{
					if(jQuery('#subscribe-wrapper').length>0)
					{
						if(typeof data._fxHtml=="string")
							jQuery('#subscribe-wrapper').append(data._fxHtml);
						jQuery('#subscribe-form').slideUp('fast',function(){
							jQuery(this).remove();
						});
						
						jQuery('#subscribe-unsubscribe').slideDown('fast',function(){
							subscribeEventSetter.unsubscribeClick();
						});
					}
					else if(jQuery('#form-film-subscribe').length>0)
					{
						jQuery('#form-film-subscribe').html('Đăng ký theo dõi phim thành công, Phim Mới sẽ gửi thông báo qua email cho bạn khi có cập nhật mới.');
					}
					else
					{
						if(typeof data._fxMessage=="string")
							fx.displayMessage(data._fxMessage);
						else
							fx.displayMessage('Đăng ký theo dõi phim thành công.');
					}
					
				}
				else
				{
					var src=jQuery('#subscribe-image').attr('src');
					var randVal=Math.floor(Math.random()*100);
					jQuery('#subscribe-image').attr('src',src+"&"+randVal);
					jQuery('#subscribe-verify').val('');
				}
			});
			return false;
		});
	}
	
	//--Khi người dùng hủy đăng ký
	subscribeEventSetter.unsubscribeClick=function(){
		jQuery('#btn-unsubscribe').click(function(){
			if(!confirm('Bạn có chắc chắn không muốn theo dõi phim này nữa không ?'))
				return false;
			var targetUrl=jQuery(this).attr('href');
			if(typeof targetUrl=="string")
			{
				targetUrl+="?_fxAjax=1&_fxResponseType=JSON";
			}
			else
			{
				console.error("Không xác định được targetUrl");
				return false;
			}
			var hash='';
			var tmpHash=jQuery(this).attr('data-hash');
			
			if(typeof tmpHash!="undefined" && tmpHash!=null)
				hash=tmpHash;
			if(hash=="")
				hash=fx.getCookie('subscribed');
			
			jQuery.ajax({
				'url':targetUrl,
				'type':'POST',
				'dataType':'JSON',
				'data':{'hash':hash}
			}).done(function(data){
				if(data._fxStatus)
				{
					jQuery('#subscribe-wrapper').append(data._fxHtml);
					
					jQuery('#subscribe-form').slideUp('fast',function(){
						jQuery(this).remove();
					});
					jQuery('#subscribe-unsubscribe').slideUp('fast',function(){
						jQuery(this).remove();
					});
					
					jQuery('#subscribe-button').slideDown('fast',function(){
						subscribeEventSetter.subscribeClick();
						if(typeof data._fxMessage=="string")
							fx.displayMessage(data._fxMessage);
					});
					
				}
			});
			return false;
		});
		
	}
	
	subscribeEventSetter.setAll=function(){
		subscribeEventSetter.subscribeClick();
		subscribeEventSetter.formSubmit();
		subscribeEventSetter.unsubscribeClick();
	}
	subscribeEventSetter.setAll();
});