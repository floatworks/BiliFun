(function() {

  var root = this;
  var array = [];
  var push = array.push;
  var slice = array.slice;
  var splice = array.splice;

  var Barrage;
  if (typeof exports !== 'undefined') {
    Barrage = exports;
  } else {
    Barrage = root.Barrage = {};
  }

  // 连接jquery
  Barrage.$ = root.jQuery;

  // 各种弹幕属性
  Barrage.config = {

    // 'color' : ['red', 'blue', 'black', 'orange', 'white'],
    'color': ['white'],
    'font_family': ['Monaco'],
    'font_size': ['18px', '20px', '24px', '28px'],
    'speed': [10000, 9000, 8000, 7000, 6000, 5000, 4000],
    'top': [80, 100, 120, 140, 160, 180, 200, 220, 240, 260, 280, 300],
    'time': []
  };

  // 随机属性(⊙ _ ⊙)
  Barrage.random = function(len) {
    return Math.random() * len;
  };
  var bullet = Barrage.bullet = (function() {

    var _font_family;
    var _font_size;
    var _color;
    var _speed;
    var _x_pos;
    var _y_pos;
    var _time;

    var random_render = function(config_item) {

      return config_item[Math.floor(Barrage.random(config_item.length))];
    };

    var danmaku = '{"danmaku": [' +
      '{ "num": "1", "font_family": "Monaco", "time": 2, "font_size": "24px", "content": "hhh" },' +
      '{ "num": "2", "font_family": "Monaco", "time": 5, "font_size": "24px", "content": "233" },' +
      '{ "num": "3", "font_family": "Monaco", "time": 7, "font_size": "24px", "content": "yes" },' +
      '{ "num": "4", "font_family": "Monaco", "time": 3, "font_size": "24px", "content": "nice" },' +
      '{ "num": "5", "font_family": "Monaco", "time": 8, "font_size": "24px", "content": "ok~" },' +
      '{ "num": "6", "font_family": "Monaco", "time": 9, "font_size": "24px", "content": "666" },' +
      '{ "num": "7", "font_family": "Monaco", "time": 10, "font_size": "24px", "content": "bye~" },' +
      '{ "num": "8", "font_family": "Monaco", "time": 4, "font_size": "24px", "content": "thanks!" },' +
      '{ "num": "9", "font_family": "Monaco", "time": 6, "font_size": "24px", "content": "woooo" },' +
      '{ "num": "10", "font_family": "Monaco", "time": 4, "font_size": "24px", "content": "yooooo~" }]}';



    var obj = JSON.parse(danmaku);
    var _video = document.getElementById('video-main');

    _video.addEventListener("play", function() {

      setInterval(function() {
        for (var i = 0; i < 10; i++) {
          var _video = document.getElementById('video-main');
          // console.log(Math.round(_video.currentTime));
          // console.log(obj.danmaku[i].time);
          if (_video.paused) break;
          if (Math.round(_video.currentTime) == obj.danmaku[i].time) {

            // var launch = function() {
            // _font_size = obj.danmaku[i].font_size || random_render(Barrage.config.font_size);
            // _font_family = obj.danmaku[i].font_family || random_render(Barrage.config.font_family);
            // _color = obj.danmaku[i].color || random_render(Barrage.config.color);
            // _speed = obj.danmaku[i].speed || random_render(Barrage.config.speed);
            _y_pos = random_render(Barrage.config.top);
            console.log(obj.danmaku[i].content);
            if (!obj.danmaku[i].content) return;

            var words = Barrage.$("<p>" + obj.danmaku[i].content + "</p>");
            words.css("font-size", obj.danmaku[i].font_size);
            words.css("font-family", obj.danmaku[i].font_family);
            words.css("right", 0);
            words.css("color", 'white');
            words.css("position", "absolute");
            words.css("top", _y_pos);
            words.attr("zoom", 1000);
            var _video = document.getElementById('video-main');

            $("#danmaku").append(words);
            Barrage.$(words).animate({
              "right": '100%',
            }, 4000, function() {
              $(words).remove(); //弹幕结束后消失
            });
            break;
            //}
          }
        }
      }, 1000);
    });


    return {

    };
  })();



  var Action = Barrage.Action = {

  };
}).call(this);