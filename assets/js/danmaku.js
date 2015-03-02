var getline = function(type, foo) {
	if (type == 's') {
		reverse = foo||'yes';
		//console.log(reverse);
		line = danmakucache.scroll[0].line;
		min = danmakucache.scroll[0].count;
		if (reverse == 'yes') {
			$.each(danmakucache.scroll.slice().reverse(), function() {
				if (this.count <= min) {
					min = this.count;
					line = this.line;
				}
				//console.log(min);
			});
		}
		else {
			$.each(danmakucache.scroll.slice(), function() {
				if (this.count <= min) {
					min = this.count;
					line = this.line;
				}
				//console.log(min);
			});
		}
		return line;
	}
	else {
		reverse = foo||'yes';
		//console.log(reverse);
		line = danmakucache.fixed[0].line;
		min = danmakucache.fixed[0].count;
		if (reverse == 'yes') {
			$.each(danmakucache.fixed.slice().reverse(), function() {
				if (this.count <= min) {
					min = this.count;
					line = this.line;
				}
				//console.log(min);
			});
		}
		else {
			$.each(danmakucache.fixed.slice(), function() {
				if (this.count <= min) {
					min = this.count;
					line = this.line;
				}
				//console.log(min);
			});
		}
		return line;
	}
};

var classNameGen = function(charsLength,chars) {
    var length = charsLength; 
 
    if (!chars) 
        var chars = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ1234567890"; 
 
    var randomChars = ""; 
 
    for(x=0; x<length; x++) { 
        var i = Math.floor(Math.random() * chars.length); 
        randomChars += chars.charAt(i); 
    } 
    return 'h' + randomChars;
};

var getWidth = function(clientWidth) {
	return clientWidth;
	return ( 2 * clientWidth ) -  ( ( 3 / 14 ) * clientWidth );
}

var releasedanmaku = function(selectedline, foo) {
	initfoo = false||foo;
	//console.log(initfoo);
	if ($(".player")[0].paused || initfoo == true) {
		setTimeout(function() {
			releasedanmaku(selectedline);
		}, 2000);
		//console.log('Waiting Line ' + selectedline);
 	}
 	else {
		danmakucache[selectedline - 1].count--;
		//console.log('Released Line ' + selectedline);
 	}
}

var getdanmakuType = function(type) {
	type = parseInt(type);
	switch (type) {
		case 0:
			return 'special2';
			break;

		case 1:
			return 'general';
			break;

		case 2:
			return 'general';
			break;

		case 3:
			return 'general';
			break;

		case 4:
			return 'special2';
			break;

		case 5:
			return 'special1';
			break;

		case 6:
			return 'special3';
			break;

		default:
			return 'general';
			break;
	}
}

var gendanmaku = function(text, type, size, color) {
	text = text.replace(/ /g, '&nbsp;');
	text = text.replace(/\/n/g, '<br>');
	//console.log(typefoo);
	
	type = type||'general';
	size = size||25;
	size = size + 'px';

	color = color||'#FFFFFF';

	/*
	type = $('#selecteddanmakumode')[0].value;
	size = $('#selecteddanmakufontsize')[0].value + 'px';
	color = $('#hexVal')[0].value;
	*/

	//console.log(type);

	dmkid = classNameGen(16);

	jQuery('<style/>', {
		animation: dmkid,
	}).appendTo('head')[0];

	jQuery('<div/>', {
		class: 'danmaku',
		id: dmkid,
	}).appendTo('.danmakuwrap')[0];

	element = $("#" + dmkid)[0];

	element.innerHTML = text;

	if (type == 'general') {
		destroytype = 's';
		selectedline = getline('s');
		//console.log(selectedline);
		topoffset = ( selectedline - 1 ) * 35;
		danmakucache.scroll[selectedline - 1].count++;

		element.style['font-size'] = size;

	 	startpoint = videowidth + getWidth(element.clientWidth) + 10;
	 	endpoint = - element.clientWidth - 10;
	 	//element.style.display = 'none';
	 	//console.log(startpoint);
	 	/*
	 	topoffset = 35 * Math.floor(Math.random() * 20);
	 	while (topoffset > videoheight) {
	 		topoffset = 35 * Math.floor(Math.random() * 20);
	 	}
	 	*/
	 	offsetflow = endpoint - startpoint;
	 	dmkstyle = '.' + dmkid + '{text-shadow: 1px 1px 1px #000000;left:' + startpoint + 'px;top: ' + topoffset + 'px;color:' + color + ';-webkit-animation:' + dmkid + ' linear 8s;-webkit-animation-iteration-count:1;-webkit-transform-origin:50% 0%;-webkit-backface-visibility:hidden;-webkit-perspective:1000;}@-webkit-keyframes ' + dmkid + '{from{-webkit-transform: translate3d(1px, 0, 0);}to{-webkit-transform: translate3d(' + offsetflow + 'px, 0, 0);}}';
	 	//console.log(element.clientWidth);
	 	//element.style.left = startpoint + 'px';
	}
	else if (type == 'special1') {
		destroytype = 'f';
		selectedline = getline('f');
		//console.log(selectedline);
		topoffset = ( selectedline - 1 ) * 35;
		danmakucache.fixed[selectedline - 1].count++;

		element.style['font-size'] = size;
		
		startpoint = ( videowidth / 2 ) - ( getWidth(element.clientWidth) / 2 );
		dmkstyle = '.' + dmkid + '{text-shadow: 1px 1px 1px #000000;left:' + startpoint + 'px;top: ' + topoffset + 'px;color:' + color + ';-webkit-animation:' + dmkid + ' linear 8s;-webkit-animation-iteration-count:1;-webkit-transform-origin:50% 0%;-webkit-backface-visibility:hidden;-webkit-perspective:1000;}@-webkit-keyframes ' + dmkid + '{from{-webkit-transform: translate3d(0px, 0, 0);}to{-webkit-transform: translate3d(0px, 0, 0);}}';
	}

	else if (type == 'special2') {
		destroytype = 'f';
		selectedline = getline('f','no');
		//console.log(selectedline);
		topoffset = ( selectedline - 1 ) * 35;
		danmakucache.fixed[selectedline - 1].count++;

		element.style['font-size'] = size;
		
		startpoint = ( videowidth / 2 ) - ( getWidth(element.clientWidth) / 2 );
		dmkstyle = '.' + dmkid + '{text-shadow: 1px 1px 1px #000000;left:' + startpoint + 'px;top: ' + topoffset + 'px;color:' + color + ';-webkit-animation:' + dmkid + ' linear 8s;-webkit-animation-iteration-count:1;-webkit-transform-origin:50% 0%;-webkit-backface-visibility:hidden;-webkit-perspective:1000;}@-webkit-keyframes ' + dmkid + '{from{-webkit-transform: translate3d(0px, 0, 0);}to{-webkit-transform: translate3d(0px, 0, 0);}}';
	}

	else if (type == 'special3') {
		destroytype = 's';
		selectedline = getline('s');
		//console.log(selectedline);
		topoffset = ( selectedline - 1 ) * 35;
		danmakucache.scroll[selectedline - 1].count++;

		element.style['font-size'] = size;

	 	startpoint = videowidth + getWidth(element.clientWidth) - 10;
	 	endpoint = - element.clientWidth - 10;
	 	//element.style.display = 'none';
	 	//console.log(startpoint);
	 	/*
	 	topoffset = 35 * Math.floor(Math.random() * 20);
	 	while (topoffset > videoheight) {
	 		topoffset = 35 * Math.floor(Math.random() * 20);
	 	}
	 	*/
	 	offsetflow = endpoint - startpoint;
	 	dmkstyle = '.' + dmkid + '{text-shadow: 1px 1px 1px #000000;left:' + startpoint + 'px;top: ' + topoffset + 'px;color:' + color + ';-webkit-animation:' + dmkid + ' linear 5s;-webkit-animation-iteration-count:1;-webkit-transform-origin:50% 0%;-webkit-backface-visibility:hidden;-webkit-perspective:1000;}@-webkit-keyframes ' + dmkid + '{from{-webkit-transform: translate3d(' + offsetflow + 'px, 0, 0);}to{-webkit-transform: translate3d(1px, 0, 0);}}';
	 	//console.log(element.clientWidth);
	 	//element.style.left = startpoint + 'px';
	}


 	$("style[animation='" + dmkid + "']")[0].innerHTML += dmkstyle;
 	
 	//element.style.display = '';
 	element.className += ' ' + dmkid;

 	//console.log($(".player")[0].paused);
 	if ($(".player")[0].paused) {
 		element.style['-webkit-animation-play-state'] = 'paused';
 	}

 	element.setAttribute('line', selectedline);

 	element.addEventListener("webkitAnimationEnd", function(e) {
 		e.currentTarget.remove();
 		$("style[animation='" + e.currentTarget.id + "']").remove();
 		//console.log('Removed: ' + e.currentTarget.id);
 		if (destroytype == 's') {
 			danmakucache.scroll[e.currentTarget.getAttribute('line') - 1].count--;
 		}
 		else if (destroytype == 'f') {
 			danmakucache.fixed[e.currentTarget.getAttribute('line') - 1].count--;
 		}
 		//console.log('Released Line ' + e.currentTarget.getAttribute('line'));
 	});
 	//console.log('Wrote Line ' + selectedline);
 	
 	//releasedanmaku(selectedline, true);
}
/*
$("video")[0].onprogress = function(e) {
	console.log(e.target.currentTime);
	i = 10;
	while (i <= 450) {
		setTimeout(function() {
			console.log(e.target.currentTime);
		}, i);
		//console.log(i);
		i = i + 20;
	}
}
*/
var danmaku;
var danmakucursor;

danmakucursor = 0;

var loaddanmaku = function(url) {
	/*
	$.ajax({
		url: 'test.json',
		success: function(data) {
			$.each(data.t, function(index, value) {
				data.t[index] = Math.round(value * 1000)/1000;
			});
			danmaku = data;
		},
		dataType: 'json'
	});
*/
	$.ajax({
        type: "get",
        async: false,
        url: url,
        dataType: "jsonp",
        jsonp: "callback",
        jsonpCallback:'callback',
        success: function(data) {
        	$.each(data.t, function(index, value) {
				data.t[index] = Math.round(value * 1000)/1000;
			});
			danmaku = data;
        },
    });
}

//loaddanmaku();

var checkdanmaku = function() {
	if( danmaku.t[danmakucursor] <= Math.round($(".player")[0].currentTime * 10)/10 ) {
		//console.log(danmaku.d[danmakucursor]);
		console.log('TYPE: ' + danmaku.s[danmakucursor][0]);
		console.log('TYPE: ' + getdanmakuType(danmaku.s[danmakucursor][0]));
		//console.log('SIZE: ' + danmaku.s[danmakucursor][1] + 'px');
		//console.log('COLOR: #' + parseInt(danmaku.s[danmakucursor][2]).toString(16).toUpperCase());

		danmakutext = danmaku.d[danmakucursor];
		color = '#' + parseInt(danmaku.s[danmakucursor][2]).toString(16).toUpperCase();
		type = getdanmakuType(danmaku.s[danmakucursor][0]);
		size = danmaku.s[danmakucursor][1];

		gendanmaku(danmakutext, type, size, color);
		
		danmakucursor++;
		checkdanmaku();
	}
	else {
		return true;
	}
}

var danmakucheck;

