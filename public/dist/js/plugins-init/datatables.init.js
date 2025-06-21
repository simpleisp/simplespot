$(document).ready(function () {
	var table = $('#responsiveTable').DataTable({
		responsive: true,
		columnDefs: [
			{ responsivePriority: 1, targets: 0 },
			{ responsivePriority: 2, targets: 1 },
			{ responsivePriority: 3, targets: 2 }
		],
		language: {
			paginate: {
				next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
				previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
			}
		}
	});

	// Trigger recalculation after table initialization
	setTimeout(function () {
		table.columns.adjust().responsive.recalc();
	}, 100);
});