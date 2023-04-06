var CekEmail = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Cek email
            // var BASE_URL = 'http://localhost:8000';
            $('#email').on('keyup', function () {
                // alert('ahay');
                $(this).val($(this).val().replace(/\s+/g, ''));
                if( !$(this).val() ) {
                    $("#cekemail").find("span").remove();
                    $('#cekemail').append(
                        '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                        '&nbsp;Type ur email please...</span>'
                    );
                }else{
                    let email = $(this).val();
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if( !emailReg.test( email ) ) {
                        $("#cekemail").find("span").remove();
                        $('#cekemail').append(
                            '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                            '&nbsp;Type correct email format please...</span>'
                        );
                    }else{
                        console.log(email);
                        if (email) {
                            jQuery.ajax({
                                url: '/admin/data/cb/email/' + email,
                                type: "GET",
                                dataType: "json",
                                success: function (data) {
                                    console.log(data);
                                    console.log(data[0]);
                                    if(data.length === 0){
                                        $("#cekemail").find("span").remove();
                                        $('#cekemail').append(
                                            '<span class="cekemailspan" style="font-size:14px;color:green;"><i class="fa fa-check"></i>'+
                                            '&nbsp;You can use this email</span>'
                                        );
                                    }else{
                                        $("#cekemail").find("span").remove();
                                        $('#cekemail').append(
                                            '<span class="cekemailspan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                                            '&nbsp;Email already used</span>'
                                        );
                                    }
                                },
                            });
                            // console.log(key);
                            // console.log(value);
                        } else {
                            $("#cekemail").find("span").remove();
                            $('#cekemail').append(
                                '<span class="cekemailspan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                                '&nbsp;Email already used/span>'
                            );
                        }
                    }
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    CekEmail.init();
});