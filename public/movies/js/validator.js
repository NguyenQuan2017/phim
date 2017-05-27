 $("#form-register").validate({
        rules:{
            name: { 
                required:true,
                minlength:3,
                // remote:{
                //     url: "{{ asset('check/check-username') }}",
                //     type:"POST"
                // }
                
            },
            email: {
                required:true,
                email:true,
                // remote:{
                //      url: "{{ url('/check/check-email') }}",
                //     type:"POST"
                // }

            },
            password: {
                required:true,
                minlength:6
            },
            re_password: {
                equalTo:"#password"
            }

        },
        messages:{
            name: {
                required:"Vui lòng nhập Full name",
                minlength: "Tên phải có ít nhất 3 ký tự",
                remote: "Username đã tồn tại" 
            },
            email: {
                required:"Vui lòng nhập Email",
                email:"Định dạng Email không đúng",
                remote: "Email này đã tồn tại" 
                
            },

            password: {
                required:"Vui lòng nhập password",
                minlength:"Mật khẩu phải có ít nhất 6 ký tự"
            },
            re_password: {
                equalTo: "Mật Khẩu xác nhận không đúng"
            },
        }
     })