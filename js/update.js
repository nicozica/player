// This is run when the document is ready, you could also run setInterval elsewhere if needed
$(document).ready(function (e) {

   setInterval ( RunUpdate, 3000 ); // Run once every 3 seconds

});

function RunUpdate() {
   $("#Update").load('update.php');
}