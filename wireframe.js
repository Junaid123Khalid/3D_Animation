// $(document).ready(function() {
//     $('#wireframe-btn').click(function() {
//         let model = document.getElementById('model');
//         let shapes = model.getElementsByTagName('Shape');
//         for (let i = 0; i < shapes.length; i++) {
//             shapes[i].setAttribute('render', 'true');
//             shapes[i].setAttribute('solid', 'false');
//         }
//     });
// });
$(document).ready(function() {
    let isWireframe = false; // Variable to track wireframe state

    $('#wireframe-btn').click(function() {
        let model = document.getElementById('model');
        let shapes = model.getElementsByTagName('Shape');
        
        // Toggle wireframe state
        isWireframe = !isWireframe;

        // Loop through shapes and toggle wireframe mode
        for (let i = 0; i < shapes.length; i++) {
            shapes[i].setAttribute('render', isWireframe ? 'false' : 'true'); // Toggle render attribute
            shapes[i].setAttribute('solid', isWireframe ? 'true' : 'false'); // Toggle solid attribute
        }
    });
});
