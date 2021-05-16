$(function() {
    CKEDITOR.replace( '.ckeditor' );
    // setup the repeater
    $('.repeater').repeater();
    //get the values of the inputs as a formatted object
    $('.repeater').repeaterVal();
    $("#wizard").steps();

    $("#alert").hide();
});

// TO HIDE THE ALERT MESSAGE 
setTimeout(function() {  $(".alert").fadeOut(500);  }, 3000);

// FUNCTION TO GET THE UPLOADING IMAGE AND PREVIEW IT ON TAG IMAG
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $("#preview").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

// DISPLAY THE IMAGE ON THE TAG
$("#image").change(function () {
    readURL(this);
});
