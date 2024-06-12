<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topko Dent</title>
    <link rel="stylesheet" href="./css/pixijs2.css">
    <link rel="icon" type="image/x-icon" href="./images/Dr.Ardi.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.3.3/pixi.min.js"></script>
</head>
<body>
    <div class="pixi-container"></div>
    <script type="module">
      // Importimi i klasave nga pixi.js
        import { Application, MeshPlane, Assets} from 'https://cdn.skypack.dev/pixi.js';

(async () =>
{
    // Create a new application
    const app = new Application();

    // Initialize the application
    await app.init({ background: '#fff', resizeTo: window });

    // Append the application canvas to the document body
    document.body.appendChild(app.canvas);

    // Load the grass texture
    const texture = await Assets.load('https://png.pngtree.com/png-vector/20240205/ourmid/pngtree-tooth-3d-illustration-rendering-png-image_11618072.png');

    // Create a simple grass plane and add it to the stage
    const plane = new MeshPlane({ texture, verticesX: 10, verticesY: 10 });

    plane.x = 100;
    plane.y = 100;

    app.stage.addChild(plane);

    // Get the buffer for vertex positions.
    const { buffer } = plane.geometry.getAttribute('aPosition');

    // Listen for animate update
    let timer = 0;

    app.ticker.add(() =>
    {
        // Randomize the vertice positions a bit to create movement.
        for (let i = 0; i < buffer.data.length; i++)
        {
            buffer.data[i] += Math.sin(timer / 10 + i) * 0.5;
        }
        buffer.update();
        timer++;
    });
})();

    </script>
</body>
</html
