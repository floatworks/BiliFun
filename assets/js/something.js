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
			setTimeout(function(){
			$("#mylist-music").animate({left:'-300px'},1000);
			},10);
			$("#anime-content").fadeOut(1000);
			setTimeout(function(){
			$("#mylist-music").animate({left:''},1000);
			},10);
		}
		else if ($("#music-content").css('display') == 'block') {
			$("#music-content").fadeOut(1000, function() {
				$("#anime-content").fadeIn(1000);
			});
		}
		else if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").fadeOut(1000, function() {
				$("#anime-content").fadeIn(1000);
			});
		}
		else if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").fadeOut(1000, function() {
				$("#anime-content").fadeIn(1000);
			});
		} else {
			$("#anime-content").fadeIn(1000);
		}
	});
});
$(document).ready(function() {
	$("#mylist-music").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").fadeOut(1000, function() {
				$("#music-content").fadeIn(1000);
			});
		}
		else if ($("#music-content").css('display') == 'block') {
			$("#music-content").fadeOut(1000);
		}
		else if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").fadeOut(1000, function() {
				$("#music-content").fadeIn(1000);
			});
		}
		else if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").fadeOut(1000, function() {
				$("#music-content").fadeIn(1000);
			});
		} else {
			$("#music-content").fadeIn(1000);
		}
	});
});
$(document).ready(function() {
	$("#mylist-entertainment").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").fadeOut(1000, function() {
				$("#entertainment-content").fadeIn(1000);
			});
		}
		else if ($("#music-content").css('display') == 'block') {
			$("#music-content").fadeOut(1000, function() {
				$("#entertainment-content").fadeIn(1000);
			});
		}
		else if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").fadeOut(1000);
		}
		else if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").fadeOut(1000, function() {
				$("#entertainment-content").fadeIn(1000);
			});
		} else {
			$("#entertainment-content").fadeIn(1000);
		}
	});
});
$(document).ready(function() {
	$("#mylist-technology").click(function() {
		if ($("#anime-content").css('display') == 'block') {
			$("#anime-content").fadeOut(1000, function() {
				$("#technology-content").fadeIn(1000);
			});
		}
		else if ($("#music-content").css('display') == 'block') {
			$("#music-content").fadeOut(1000, function() {
				$("#technology-content").fadeIn(1000);
			});
		}
		else if ($("#entertainment-content").css('display') == 'block') {
			$("#entertainment-content").fadeOut(1000, function() {
				$("#technology-content").fadeIn(1000);
			});
		}
		else if ($("#technology-content").css('display') == 'block') {
			$("#technology-content").fadeOut(1000);
		} else {
			$("#technology-content").fadeIn(1000);
		}
	});
});