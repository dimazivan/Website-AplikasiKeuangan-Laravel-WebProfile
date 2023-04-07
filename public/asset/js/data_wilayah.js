var DataWilayah = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Ambil Data Ajax
            // $('#cbumkm').on('change', function(){
            //     // ambil data dari elemen option yang dipilih
            //     const province = $('#cbumkm option:selected').data('province');
            //     const city = $('#cbumkm option:selected').data('city');
                
            //     // tampilkan data ke element
            //     $('[name=provinsiasal]').val(province);
            //     $('[name=kotaasal]').val(city);
            //     console.log(province);
            //     console.log(city);
            // });

            // Ambil Kota
            // var BASE_URL = 'http://localhost:8000';
            $('#cbprovince').on('click change', function () {
                // alert('ahay');
                let provinceId = $(this).val();
                console.log(provinceId);
                if (provinceId) {
                    jQuery.ajax({
                        url: '/api/data/cb/kota/' + provinceId,
                        // url: BASE_URL + "/ongkir/provinsi/" + provinceId,
                        // url: '/ongkir/provinsi/' + provinceId,
                        // url: "{{ route('ongkir.show',"+ provinceId +") }}",
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#cbcity').empty();
                            $('select[name="cbcity"]').append(
                                '<option value="#" disabled selected>Pilih Kota</option>');
                            $.each(data, function(id, nama) {
                                $('select[name="cbcity"]').append(
                                    '<option value="' + id + '">' 
                                    + nama +
                                    '</option>');
                            console.log(nama);
                            });
                        },
                    });
                    // console.log(data);
                    // console.log(key);
                    // console.log(value);
                } else {
                    $('#cbcity').empty();
                    $('select[name="cbcity"]').append(
                        '<option value="#" disabled selected>Pilih Kota</option>');
                }
            });

            // Ambil Kecamatan
            $('#cbcity').on('click change', function () {
                // alert('ahay');
                let cityId = $(this).val();
                console.log(cityId);
                if (cityId) {
                    jQuery.ajax({
                        url: '/api/data/cb/kecamatan/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#cbdistrict').empty();
                            $('select[name="cbdistrict"]').append(
                                '<option value="#" disabled selected>Pilih Kecamatan</option>');
                            $.each(data, function(id, nama) {
                                $('select[name="cbdistrict"]').append(
                                    '<option value="' + id + '" >' 
                                    + nama +
                                    '</option>');
                            });
                        },
                    });
                    // console.log(data);
                    // console.log(key);
                    // console.log(value);
                } else {
                    $('#cbdistrict').empty();
                    $('select[name="cbdistrict"]').append(
                        '<option value="#" disabled selected>Pilih Kecamatan</option>');
                }
            });

            // Ambil Kelurahan
            $('#cbdistrict').on('click change', function () {
                // alert('ahay');
                let districtId = $(this).val();
                console.log(districtId);
                if (districtId) {
                    jQuery.ajax({
                        url: '/api/data/cb/kelurahan/' + districtId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#cbward').empty();
                            $('select[name="cbward"]').append(
                                '<option value="#" disabled selected>Pilih Kelurahan</option>');
                            $.each(data, function(id, nama) {
                                $('select[name="cbward"]').append(
                                    '<option value="' + id + '">' 
                                    + nama +
                                    '</option>');
                            });
                        },
                    });
                    // console.log(data);
                    // console.log(key);
                    // console.log(value);
                } else {
                    $('#cbward').empty();
                    $('select[name="cbward"]').append(
                        '<option value="#" disabled selected>Pilih Kelurahan</option>');
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    DataWilayah.init();
});