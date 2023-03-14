<!DOCTYPE html>
<html>

<head>
    <title>Canvas Painting Program</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.7/p5.js"> </script>
    <style>
        .canvasku {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        input {
            margin: 5px;
            padding: 5px;
        }

        canvas {
            border: 2px #000000 solid;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, .5);

            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }

        h1,
        h3,
        h5,
        h6 {
            text-align: center;
            padding-right: 200px;
        }

        .row {
            margin-top: 20px;
        }

        .keclogo {
            font-size: 24px;
        }

        .namars {
            font-size: 24px;
        }

        .alamatlogo {
            font-size: 24px;
        }

        .namadr {
            font-size: 24px;
        }

        #tls {
            text-align: right;
        }

        .alamat-tujuan {
            margin-left: 50%;
        }

        .garis1 {
            border-top: 3px solid black;
            height: 2px;
            border-bottom: 1px solid black;
        }

        #logo {
            margin: auto;
            max-height: 40%;
            max-width: 90%;
            margin-left: 50%;
            margin-right: auto;
        }

        #tempat-tgl {
            margin-left: 120px;
        }

        #camat {
            text-align: center;
        }

        #nama-camat {
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>

<body id="main">

    <header>
        <div class="row">
            <div id="img" class="col-md-3">
                <img id="logo"
                    src="https://1.bp.blogspot.com/-DmgN_StBVoY/X5uV1C46fVI/AAAAAAAAHYg/xNOLNXeOWRI7FbVJhRWpUb52OVy4_96rACLcBGAsYHQ/s1148/logo%2Bkimia%2Bfarma-01.png" />
            </div>
            <div id="text-header" class="col-md-9">
                <h3 class="namars">RUMAH SAKIT XXXX</h3>
                <h1 class="keclogo"><strong>KECAMATAN XXXX</strong></h1>
                <h6 class="alamatlogo">Jl. XXX, No. 6X8, Telepon/FaximileXXX</h6>
                <h5 class="namadr"><strong>DR. DIMAZ IVAN P</strong></h5>
            </div>
        </div>
    </header>
    <div class="canvasku">
        <input type="color" id="col" onchange="changeColor()">
        <input type="range" id="brush" nin="1" max="100" value="1" onchange="setStroke()">
        <button value="reset" onclick="setup()">Reset</button>&nbsp;
        <button onclick="getCanvasImage()">Get Canvas Image</button>
    </div>
</body>
<script>
    /*window.onload = function(){
    alert("#v2.0 : optimization of the brush precision \n#v2.1 : free color selection \nbrush size slider option ");
    }*/
    var c;

    function setup() {
        document.getElementById("col").value = "#000000";
        createCanvas(windowWidth - 100, windowHeight - 100);
        document.getElementById("brush").value = 1;
        //document.getElementById("brush").style.backgroundColor = "#000";
        background(255);
    }

    function copy() {
        // 
    }

    function touchStarted() {
        point(mouseX, mouseY);
    }

    function touchMoved() {
        line(mouseX, mouseY, pmouseX, pmouseY);
    }


    function changeColor() {
        col = document.getElementById("col").value;

        //document.getElementById("brush").style.backgroundColor = col;
        let r, g, b;

        r = col.substring(1, 3);
        g = col.substring(3, 5);
        b = col.substring(5, 7);

        r = parseInt(r, 16);
        g = parseInt(g, 16);
        b = parseInt(b, 16);


        stroke(r, g, b);


    }

    function setStroke() {
        var size = document.getElementById("brush").value;
        size < 1 ? size++ : size;
        strokeWeight(size);
    }

    var canvas = document.getElementById("col");
    var ctx = canvas.getContext("2d");
    var painting = false;

    canvas.addEventListener('mousedown', startPainting);
    canvas.addEventListener('mouseup', stopPainting);
    canvas.addEventListener('mousemove', draw);

    function startPainting(e) {
        painting = true;
        draw(e);
    }

    function stopPainting() {
        painting = false;
        ctx.beginPath();
    }

    function draw(e) {
        if (!painting) return;
        ctx.lineWidth = 10;
        ctx.lineCap = "round";
        ctx.strokeStyle = "#000000";
        ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
    }

    function getCanvasImage() {
        var canvasDataUrl = canvas.toDataURL('image/png');
        const image = canvas.toDataURL("image/png");
        const link = document.createElement("a");
        link.download = "canvas_image.png";
        link.href = image;
        // window.open(image, "_blank");
        link.click();
        console.log(canvasDataUrl);
        console.log(link);
        console.log(image);
        // window.open(image, "_blank");
        // You can now use the data URL to display the canvas image or send it to a server.
    }

    // function resetCanvas() {
    //     ctx.clearRect(0, 0, canvas.width, canvas.height);
    // }
</script>

</html>