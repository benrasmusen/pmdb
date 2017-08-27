
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$('.datatable-init').DataTable({
	"searching": true,
	"paging": false,
	"info": false,
	"dom": '<"toolbar">frtip',
	"columnDefs": [ 
		{
			"targets": [-1,-1],
			"orderable": false
		}
	],
	initComplete: function () {
		// If on album table, add filter for band
		if (this.api().column(0).nodes().to$().hasClass('band')) {
			this.api().columns([0]).every( function () {
				var column = this;
				var select = $('<select class="form-control"><option value="">Select a band...</option></select>')
				.appendTo( $('div.toolbar').empty() )
				.on( 'change', function () {
					var val = $.fn.dataTable.util.escapeRegex(
						$(this).val()
						);

					column
					.search( val ? '^'+val+'$' : '', true, false )
					.draw();
				} );

				column.data().unique().sort().each( function ( d, j ) {
					select.append( '<option value="'+d+'">'+d+'</option>' )
				} );
			} );
		}
	}
});