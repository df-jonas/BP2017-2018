$(document).ready(function () {

    initDropZones();

});


function initDropZones() {
    //Sharing upload dropzone
    $("#sharingDropZone").dropzone({
        url: "/p/sharing/new",
        autoProcessQueue: false
    });
}