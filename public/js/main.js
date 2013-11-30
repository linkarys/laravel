// $.ajax({
// 	url: "http://devcf10.tenders.gov.au/rest/CN/list",
// 	crossDomain: true,
// 	data: {
// 		strFilterBy: 'Published',
// 		strOrderBy: 'Close Date',
// 		numStartRow: '1',
// 		numResultsPerPage: '15'
// 	},
// 	success: function (res) {
// 		console.log(res);
// 	}
// });

// $('#trybtn').click(function () {
// 	var btn = $(this);
// 	btn.button('loading');
// 	setTimeout(function () {
// 		btn.button('reset');
// 	}, 3000)
// });

// var $window = $(window)
// var $body   = $(document.body)

// var navHeight = $('.main-nav-bar').outerHeight(true) + 10

// $body.scrollspy({
// 	target: '.home-sidebar',
// 	offset: navHeight
// })

// $window.on('load', function () {
// 	$body.scrollspy('refresh')
// })


// setTimeout(function () {

// 	var $sideBar = $('.home-sidebar')

// 	$sideBar.affix({
// 		offset: {
// 			top: function () {
// 				var offsetTop      = $sideBar.offset().top
// 				var sideBarMargin  = parseInt($sideBar.children(0).css('margin-top'), 10)
// 				var navOuterHeight = $('.main-nav-bar').height()

// 				return (this.top = offsetTop - navOuterHeight - sideBarMargin)
// 			}
// 			, bottom: function () {
// 				return (this.bottom = $('.footer').outerHeight(true))
// 			}
// 		}
// 	})
// }, 100)