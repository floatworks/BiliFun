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

  // 各种弹幕属性，包括颜色，字体，大小，速度，位置等
  Barrage.config = {

    'color': ['red', 'blue', 'black', 'orange', 'white'],
    // 'color': ['white'],
    'font_family': ['Monaco'],
    'font_size': ['18px', '20px', '24px', '28px'],
    'speed': [10000, 9000, 8000, 7000, 6000, 5000, 4000],
    'top': [20, 40, 60, 80, 100, 120, 140, 160, 180, 200, 220, 240, 260, 280, 300],
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

    // 属性随机选择函数
    var random_render = function(config_item) {
      return config_item[Math.floor(Barrage.random(config_item.length))];
    };

    // 测试弹幕json
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
    var _video = document.getElementById("video-main");

    // 播放已有的原始弹幕
    _video.addEventListener("play", function() {
      // 每一秒执行一次此函数
      setInterval(function() {
        // 循环次数为原始弹幕数
        var base_num = obj.danmaku.length;
        for (var i = 0; i < base_num; i++) {
          var _video = document.getElementById('video-main');
          // console.log(Math.round(_video.currentTime));
          // console.log(obj.danmaku[i].time);

          // 暂停跳出循环
          if (_video.paused) {
            break;
          }
          // 当视频时间等于原始弹幕时播放此条弹幕
          if (_time = Math.round(_video.currentTime) == obj.danmaku[i].time) {
            //此处定义弹幕属性，固有属性或随机属性
            _font_size = obj.danmaku[i].font_size || random_render(Barrage.config.font_size);
            _font_family = obj.danmaku[i].font_family || random_render(Barrage.config.font_family);
            _color = obj.danmaku[i].color || random_render(Barrage.config.color);
            // _speed = obj.danmaku[i].speed || random_render(Barrage.config.speed);
            _y_pos = random_render(Barrage.config.top);
            if (!obj.danmaku[i].content) return;
            //发射有属性的“子弹”
            var words = Barrage.$("<p>" + obj.danmaku[i].content + "</p>");
            words.css("font-size", obj.danmaku[i].font_size);
            words.css("font-family", obj.danmaku[i].font_family);
            words.css("right", 0);
            words.css("color", _color);
            words.css("position", "absolute");
            words.css("top", _y_pos);
            words.css("text-overflow", "clip");
            words.attr("zoom", 1000);
            var _video = document.getElementById('video-main');

            $("#danmaku").append(words);
            Barrage.$(words).animate({
              "right": '100%',
            }, 4000, function() {
              $(words).remove(); //弹幕结束后消失
            });
            break;
          }
        }
      }, 1000); //每秒刷新
    }, false);


    // 获取发射内容

    function getBarrageInput() {
      return $('.container-bottom input[type=text]').val();
    }

    // 获取发射时间

    function getSendTime() {
      var myDate = new Date();
      var month = myDate.getMonth() + 1;
      var date = myDate.getDate();
      var hours = myDate.getHours();
      var minutes = myDate.getMinutes();
      var seconds = myDate.getSeconds();
      month = (month < 10) ? '0' + month : month;
      date = (date < 10) ? '0' + date : date;
      hours = (hours < 10) ? '0' + hours : hours;
      minutes = (minutes < 10) ? '0' + minutes : minutes;
      seconds = (seconds < 10) ? '0' + seconds : seconds;
      return myDate.getFullYear() + '-' + month + '-' + date + ' ' + hours + ':' + minutes + ':' + seconds;
    }

    // 将内容，编号和时间添加到右侧的表格栏
    function appendDanmakuIntoList(num, content, time) {
      $('.danmaku-table').append('<tr class="danmaku-line"><td class="danmaku-num">' + num + '</td><td class="danmaku-comment">' + content + '</td><td class="danmaku-time">' + time + '</td></tr>');
    }
    // 点击“发射”执行
    $('.container-bottom input[type=button]').click(function() {
      var input_content = getBarrageInput();
      var input_time = getSendTime();
      var input_num = ++obj.danmaku.length;
      appendDanmakuIntoList(input_num, input_content, input_time);

      var _color = random_render(Barrage.config.color);
      var _y_pos = random_render(Barrage.config.top);

      var new_words = Barrage.$("<p>" + input_content + "</p>");
      document.getElementById('bullet-input').value = ''; // 点击“发射”清除输入框中原有的文字
      new_words.css("font-size", "24px");
      new_words.css("font-family", "Monaco");
      new_words.css("right", 0);
      new_words.css("color", _color);
      new_words.css("position", "absolute");
      new_words.css("top", _y_pos);
      new_words.css("text-overflow", "clip");
      new_words.attr("zoom", 1000);
      var _video = document.getElementById('video-main');
      $("#danmaku").append(new_words);
      Barrage.$(new_words).animate({
        "right": '100%',
      }, 4000, function() {
        $(new_words).remove();
      });

    });


    // _video.addEventListener("paused", function() {
    //   clearInterval(_time);
    //   _time = 0;
    // }, false);

    return {

    };
  })();



  var Action = Barrage.Action = {

  };
}).call(this);