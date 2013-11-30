$.ajax({
	url: "http://devcf10.tenders.gov.au/rest/CN/list",
	crossDomain: true,
	data: {
		strFilterBy: 'Published',
		strOrderBy: 'Close Date',
		numStartRow: '1',
		numResultsPerPage: '15'
	},
	success: function (res) {
		console.log(res);
	}
});

$('#trybtn').click(function () {
	var btn = $(this);
	btn.button('loading');
	setTimeout(function () {
		btn.button('reset');
	}, 3000)
});