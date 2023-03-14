<!DOCTYPE html>
<html>

<head>
    <title>Canvas Drawing</title>
</head>

<body>
    <canvas id="myCanvas" width="500" height="500"></canvas>
    <br>
    <button id="resetBtn">Reset Canvas</button>
    <label for="brushSize">Brush Size:</label>
    <input type="range" id="brushSize" min="1" max="20" value="5">
    <label for="colorPicker">Color:</label>
    <input type="color" id="colorPicker" value="#000000">
    <br>
    <button id="saveBtn">Save Image</button>
    <button id="openBtn">Open Image in New Tab</button>

    <script>
        const canvas = document.getElementById("myCanvas");
        const ctx = canvas.getContext("2d");

        // Set default brush color and size
        let brushColor = "#000000";
        let brushSize = 5;

        // Set event listeners for brush size and color
        document.getElementById("brushSize").addEventListener("input", () => {
            brushSize = document.getElementById("brushSize").value;
        });
        document.getElementById("colorPicker").addEventListener("input", () => {
            brushColor = document.getElementById("colorPicker").value;
        });

        // Draw on canvas when mouse is down
        let isDrawing = false;
        canvas.addEventListener("mousedown", (event) => {
            isDrawing = true;
            draw(event);
        });

        // Stop drawing when mouse is up
        canvas.addEventListener("mouseup", () => {
            isDrawing = false;
        });

        // Draw on canvas when mouse moves
        canvas.addEventListener("mousemove", draw);

        // Reset canvas when reset button is clicked
        document.getElementById("resetBtn").addEventListener("click", () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        });

        // Save canvas image when save button is clicked
        document.getElementById("saveBtn").addEventListener("click", () => {
            const image = canvas.toDataURL("image/png");
            const link = document.createElement("a");
            link.download = "canvas_image.png";
            link.href = image;
            link.click();
        });

        // Open canvas image in new tab when open button is clicked
        document.getElementById("openBtn").addEventListener("click", () => {
            const image = canvas.toDataURL("image/png");
            window.open(image, "_blank");
        });

        // Draw function
        function draw(event) {
            if (!isDrawing) return;
            ctx.lineWidth = brushSize;
            ctx.strokeStyle = brushColor;
            ctx.lineCap = "round";
            ctx.lineTo(event.offsetX, event.offsetY);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(event.offsetX, event.offsetY);
        }
    </script>
</body>

</html>