
function previewFile() {
    const preview = document.querySelector('.w3-image');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();
    reader.addEventListener("load", function() {
        // convert image file to base64 string
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

function confirmDialog() {
    var r = confirm("Register this Room?");
    if (r == true) {
        return true;
    } else {
        return false;
    }
}

