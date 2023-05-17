<div class="modal fade modalscandata" tabindex="-1" role="dialog" aria-hidden="true" id="modalscandata">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form class="" action="#" method="post" validate enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Scan Data User</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video autoplay="true" id="video-webcam">
                        Browsermu tidak mendukung bro, upgrade donk!
                    </video>
                    <!-- <div class="scancontent" id="scancontent">
                        <video id="preview" style="width: 300px;height: 300px;outline: 1px solid red;"></video>
                    </div>
                    <script>
                        let scanner = new Instascan.Scanner({
                            video: document.getElementById('preview')
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
                        scanner.addListener('scan', function(content) {
                            console.log(content);
                        });
                    </script> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");

    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia ||
        navigator.msGetUserMedia || navigator.oGetUserMedia;

    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({
            video: true
        }, handleVideo, videoError);
    }

    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
    }

    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
        // do something
        alert("Izinkan menggunakan webcam untuk demo!")
    }
</script>