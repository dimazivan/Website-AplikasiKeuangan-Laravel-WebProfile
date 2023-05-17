var ClickDatatableUser = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Cek Data
            // var BASE_URL = 'http://localhost:8000';
            var table = $('#datatable-responsive').DataTable();
            $('#datatable-responsive tbody').on('click', 'td:nth-child(3),td:nth-child(4),td:nth-child(5),td:nth-child(6)', function() {
                var datatb = [];
                datatb = table.row(this).data();
                // console.log(table.row(this).data());
                console.log(datatb[0]);

                // Modal
                if (datatb[0]) {
                    jQuery.ajax({
                        url: '/admin/data/cb/id/' + datatb[0],
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            console.log(data[0]);
                            console.log(data[0].first_name);
                            var nama_depan = data[0].first_name;
                            var nama_belakang = data[0].last_name;
                            if (data.length === 0) {
                                $("#datatablecontent").find("#content").remove();
                                $('#datatablecontent').append(
                                    '<div id="content">Data Kosong</div>'
                                );
                            } else {
                                var modal = 'test konten bawah';
                                $("#datatablecontent").find("#content").remove();
                                // $('#datatablecontent').append(
                                //     modal
                                // );
                                $.get('/admin/data/component/user/', function(result){
                                    $('#datatablecontent').html(result);
                                });
                            }
                        },
                    });
                    // console.log(key);
                    // console.log(value);
                    $('#modaldatatable').modal('show');
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    ClickDatatableUser.init();
});