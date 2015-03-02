//notice
$(document).ready(function() {
	$("#notice-button").click(function() {
		$("#notice-content").slideToggle(2500);
	});
});


// // background
// $(document).ready(function() {
// 	$("#particleground").particleground({
// 		dotColor: '#d93b58',
// 		lineColor: '#d95f5f'
// 	});
// });


// list change
$(document).ready(function() {
	$("#mylist-anime").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").css('display', 'none');
		}
		if ($("#music-content").css('display') == 'block') {
			$("#music-content").css('display', 'none');
		}
		if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").css('display', 'none');
		}
		if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").css('display', 'none');
		} else {
			$("#anime-content").css('display', 'block');
		}
	});
});
$(document).ready(function() {
	$("#mylist-music").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").css('display', 'none');
		}
		if ($("#music-content").css('display') == 'block') {
			$("#music-content").css('display', 'none');
		}
		if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").css('display', 'none');
		}
		if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").css('display', 'none');
		} else {
			$("#music-content").css('display', 'block');
		}
	});
});
$(document).ready(function() {
	$("#mylist-entertainment").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").css('display', 'none');
		}
		if ($("#music-content").css('display') == 'block') {
			$("#music-content").css('display', 'none');
		}
		if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").css('display', 'none');
		}
		if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").css('display', 'none');
		} else {
			$("#entertainment-content").css('display', 'block');
		}
	});
});
$(document).ready(function() {
	$("#mylist-technology").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").css('display', 'none');
		}
		if ($("#music-content").css('display') == 'block') {
			$("#music-content").css('display', 'none');
		}
		if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").css('display', 'none');
		}
		if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").css('display', 'none');
		} else {
			$("#technology-content").css('display', 'block');
		}
	});
});

