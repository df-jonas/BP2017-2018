$(document).ready(function () {

    initDropZones();

});


function initDropZones() {
    //Sharing upload dropzone
    $("#sharingDropZone").dropzone({
        url: "/file/post"
    });
}