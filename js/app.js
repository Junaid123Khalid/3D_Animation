// $(document).ready(function() {
//     function loadModel(modelName) {
//         $('#model').attr('url', `models/${modelName}.x3d`);
//         $.getJSON(`php/get_model_data.php?model=${modelName}`, function(data) {
//             $('#model-title').text(data.title);
//             $('#model-description').text(data.description);
//         });
//     }

//     $('#coke-btn').click(function() {
//         loadModel('coke_can');
//     });

//     $('#fanta-btn').click(function() {
//         loadModel('fanta_can');
//     });

//     $('#sprite-btn').click(function() {
//         loadModel('sprite_can');
//     });

//     $('#wireframe-btn').click(function() {
//         var shapes = $('#model').find('Shape');
//         shapes.each(function() {
//             var render = $(this).attr('render');
//             if (render === 'true' || render === true) {
//                 $(this).attr('render', 'false');
//             } else {
//                 $(this).attr('render', 'true');
//             }
//         });
//     });

//     // Load the default model
//     loadModel('coke_can');
// });
// $(document).ready(function() {
//     function loadModel(modelPath) {
//         $('#model').attr('url', modelPath);
//     }

//     $('#coke-btn').click(function() {
//         loadModel('models/coke_can.x3d');
//     });

//     $('#fanta-btn').click(function() {
//         loadModel('models/fanta_can.x3d');
//     });

//     $('#sprite-btn').click(function() {
//         loadModel('models/sprite_can.x3d');
//     });

//     $('#wireframe-btn').click(function() {
//         let model = document.getElementById('model');
//         let nodes = model.getElementsByTagName('Shape');
//         for (let i = 0; i < nodes.length; i++) {
//             nodes[i].setAttribute('render', 'true');
//             nodes[i].setAttribute('solid', 'false');
//         }
//     });
// });
$(document).ready(function() {
    function loadModel(modelPath) {
        $('#model').attr('url', modelPath);
    }

    $('#coke-btn').click(function() {
        loadModel('models/coke_can.x3d');
    });

    $('#fanta-btn').click(function() {
        loadModel('models/fanta_can.x3d');
    });

    $('#sprite-btn').click(function() {
        loadModel('models/sprite_can.x3d');
    });

    $('#wireframe-btn').click(function() {
        let model = document.getElementById('model');
        let shapes = model.getElementsByTagName('Shape');
        for (let i = 0; i < shapes.length; i++) {
            shapes[i].setAttribute('render', 'true');
            shapes[i].setAttribute('solid', 'false');
        }
    });
});
