var CekUsername = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Cek Username
            // var BASE_URL = 'http://localhost:8000';
            $('#username').on('keyup', function () {
                // $("ul").css("visibility","hidden");
                // alert('ahay');
                $(this).val($(this).val().replace(/\s+/g, ''));
                if( !$(this).val() ) {
                    $("#cekusername").find("span").remove();
                    // $("#cekusernameregister").find("span").remove();
                    $('#cekusername').append(
                        '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                        '&nbsp;Type ur own username please...</span>'
                    );
                    // $('#cekusernameregister').append(
                    //     '<span class="cekusernamespanregister" style="font-size:14px;color:red;">'+
                    //     '&nbsp;Type ur own username please...</span>'
                    // );
                    // $("ul").css("visibility","hidden");
                }else{
                    let username = $(this).val();
                    // console.log(username);
                    if (username) {
                        jQuery.ajax({
                            url: '/admin/data/cb/username/' + username,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                // console.log(data);
                                // console.log(data[0]);
                                if(data.length === 0){
                                    $("#cekusername").find("span").remove();
                                    $('#cekusername').append(
                                        '<span class="cekusernamespan" style="font-size:14px;color:green;"><i class="fa fa-check"></i>'+
                                        '&nbsp;You can use this username</span>'
                                    );
                                    // $("#cekusernameregister").find("span").remove();
                                    // $('#cekusernameregister').append(
                                    //     '<span class="cekusernamespanregister" style="font-size:14px;color:green;">'+
                                    //     '&nbsp;You can use this username</span>'
                                    // );
                                    // $("ul").css("visibility","visible");
                                }else{
                                    $("#cekusername").find("span").remove();
                                    $('#cekusername').append(
                                        '<span class="cekusernamespan" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                                        '&nbsp;Username already taken</span>'
                                    );
                                    // $("#cekusernameregister").find("span").remove();
                                    // $('#cekusernameregister').append(
                                    //     '<span class="cekusernamespanregister" style="font-size:14px;color:red;">'+
                                    //     '&nbsp;Username already taken</span>'
                                    // );
                                    // $("ul").css("visibility","hidden");

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
                        // $("#cekusernameregister").find("span").remove();
                        // $('#cekusernameregister').append(
                        //     '<span class="cekusernamespanregister" style="font-size:14px;color:red;"><i class="fa fa-times"></i>'+
                        //     '&nbsp;Username already taken</span>'
                        // );
                        // $("ul").css("visibility","hidden");
                    }
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    CekUsername.init();
});