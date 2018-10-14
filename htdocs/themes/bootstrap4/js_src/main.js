// require ../lib/jquery/jquery.min.js
// require ../node_modules/bootstrap/dist/js/bootstrap.js
// require ../lib/select2/js/select2.js
// require ../lib/linkifyjs/linkify.min.js
// require ../lib/linkifyjs/linkify-jquery.js
// require ../lib/datatables/js/jquery.dataTables.min.js
// require ../lib/datatables/js/dataTables.bootstrap4.min.js
// require ../lib/linkifyjs/linkify.min.js
// require ./jquery-ui-selectable-combined.min.js
// require ./jquery.timers.js
// require ./filereader.js
// require ./stikked.js

jQuery(function($) {
	$('#lang').select2({
	    theme: 'bootstrap4'
	});

	$('.dataTable').DataTable({
		"searching": false,
		"paging": false,
		"aaSorting": []
	});
});
