var ClickDatatableUser = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Cek Data
            // var BASE_URL = 'http://localhost:8000';
            var table = $('#datatable-responsive').DataTable();
            $('#datatable-responsive tbody').on('click', 'td', function() {
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
                            if (data.length === 0) {
                                $("#datatablecontent").find("#content").remove();
                                $('#datatablecontent').append(
                                    '<div id="content">Data Kosong</div>'
                                );
                            } else {
                                $("#datatablecontent").find("#content").remove();
                                $('#datatablecontent').append(
                                    '<div id="content">Test konten bawah</div>'
                                );
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