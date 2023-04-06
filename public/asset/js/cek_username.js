var CekUsername = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Cek Username
            // var BASE_URL = 'http://localhost:8000';
            $('#username').on('keyup', function () {
                // alert('ahay');
                $(this).val($(this).val().replace(/\s+/g, ''));
                if( !$(this).val() ) {
                    $("#cekusername").find("span").remove();
                    $('#cekusername').append(
                        '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                        '&nbsp;Type ur own username please...</span>'
                    );
                }else{
                    let username = $(this).val();
                    console.log(username);
                    if (username) {
                        jQuery.ajax({
                            url: '/admin/data/cb/username/' + username,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                console.log(data);
                                console.log(data[0]);
                                if(data.length === 0){
                                    $("#cekusername").find("span").remove();
                                    $('#cekusername').append(
                                        '<span class="cekusernamespan" style="font-size:14px;color:green;"><i class="fa fa-check"></i>'+
                                        '&nbsp;You can use this username</span>'
                                    );
                                }else{
                                    $("#cekusername").find("span").remove();
                                    $('#cekusername').append(
                                        '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                                        '&nbsp;Username already taken</span>'
                                    );
                                }
                            },
                        });
                        // console.log(key);
                        // console.log(value);
                    } else {
                        $("#cekusername").find("span").remove();
                        $('#cekusername').append(
                            '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                            '&nbsp;Username already taken</span>'
                        );
                    }
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    CekUsername.init();
});