$('.head-link').each(function(){
	var id_href = $(this).attr('data-href').replace('#', '');
	var innerHtml = $(this).html() + '<a href="#' + id_href + '" title="Permalink to this headline">¶</a>';
	if (id_href) {$(this).html(innerHtml);}
})