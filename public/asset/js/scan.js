var ScanData = function () {
    return {
        //main function to initiate the module
        init: function () {
            // Cek Data
            // var BASE_URL = 'http://localhost:8000';
            // alert('testscan');
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(content) {
                console.log(content);
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        }
    };
}();

jQuery(document).ready(function() {
    ScanData.init();
});