

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca Cola 3D App</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://www.x3dom.org/download/x3dom.js"></script>
    <script src="wireframe.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
    <header class="bg-danger text-white text-center py-3">
        <h1 class="logo">My Coca Cola Brand</h1>
        <p class="strapline">Refreshing the World, One Drink at a Time</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <button id="coke-btn" class="btn btn-outline-light mx-2">Coke</button>
        <button id="fanta-btn" class="btn btn-outline-light mx-2">Fanta</button>
        <button id="sprite-btn" class="btn btn-outline-light mx-2">Sprite</button>
        <!-- <button id="wireframe-btn" class="btn btn-outline-light mx-2">Wireframe</button> -->
    </nav>
    <main class="container my-4">
        <div id="3d-view" class="border border-dark">
            <x3d width="500px" height="400px">
                <scene>
                    <inline id="model" nameSpaceName="model" mapDEFToID="true"></inline>
                </scene>
            </x3d>
        </div>
        
        <div id="description" class="mt-4 text-center">
            <h2 id="model-title">Model Title</h2>
            <p id="model-description">Model description will appear here.</p>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 My Coca Cola Brand</p>
    </footer>
</body>
    <!-- <script>
        $(document).ready(function() {

            function updateModelDescription(title, description) {
            $('#model-title').text(title);
            $('#model-description').text(description);
            // alert('hello');
        }
     
        $.ajax({
            alert('Hello');
            url: 'database.php', // Path to your PHP file
            type: 'GET', // Method (GET or POST)
            dataType: 'json', // Data type expected from the server
            success: function(response) {
                // Handle the response from the server
                // console.log(response);
                updateModelDescription(response.title, response.description);
            },
            error: function(xhr, status, error) {
                // Handle errors
                // console.error(xhr.responseText);
            }
        });
        
    });

    </script> -->
    <script>
        $(document).ready(function() {
            function updateModelDescription(title, description) {
                $('#model-title').text(title);
                $('#model-description').text(description);
            }

            function loadModel(modelName) {
                $('#model').attr('url', `models/${modelName}.x3d`);
                
                $.ajax({
                    url: 'database.php',
                    type: 'GET',
                    data: { model: modelName },
                    dataType: 'json',
                    success: function(response) {
                        updateModelDescription(response.title, response.description);
                    },
                    error: function(xhr, status, error) {
                        // console.error('Error:', xhr.responseText);
                    }
                });
            }

            $('#coke-btn').click(function() {
                loadModel('coke_can');
            });

            $('#fanta-btn').click(function() {
                loadModel('fanta_can');
            });

            $('#sprite-btn').click(function() {
                loadModel('sprite_can');
            });

            // Load the default model
            loadModel('');
        });
    </script>
</body>
</html>
