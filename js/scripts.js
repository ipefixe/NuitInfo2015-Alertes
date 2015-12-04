
$('#signalementModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data('titrealerte'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text("KIKOU");
    modal.find('.modal-body input').val(recipient);
});


$(document).ready(function(){
	alert("Bite");
	var tips = showTips();
	$("#tips").innerHTML = tips;
});