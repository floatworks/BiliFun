(function() {
 
  var root = this;
  var array = [];
  var push = array.push;
  var slice = array.slice;
  var splice = array.splice;
 
  // The top-level namespace.
  var Barrage;
  if ( typeof exports !== 'undefined') {
    Barrage = exports;
  } else {
    Barrage = root.Barrage = {};
  }
 
  // 版本号(￣▽￣)""
  Barrage.VERSION = '0.0.1';
 
  // 连接jquery
  Barrage.$ = root.jQuery;
 
  // 各种弹幕属性
  Barrage.config = {
 
    // 'color' : ['red', 'blue', 'black', 'orange', 'white'],
    'color' : ['white'],
    'font_family' : ['Monaco'],
    'font_size' : ['18px', '20px', '24px', '28px'],
    'speed' : [10000,9000,8000,7000,6000,5000,4000 ]
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
    
    var random_render = function(config_item) {
 
      return config_item[Math.floor(Barrage.random(config_item.length))];
    };
    
    var launch = function(objects, pose) {
 
      _font_size = objects.font_size || random_render(Barrage.config.font_size);
      _font_family = objects.font_family || random_render(Barrage.config.font_family);
      _color = objects.color || random_render(Barrage.config.color);
      _speed = objects.speed || random_render(Barrage.config.speed);
      _y_pos = objects.y_pos || Math.random() * window.innerHeight;
    
      if (!objects.content) return;
 
      var words = Barrage.$("<b>" + objects.content + "</b>");
      words.css("font-size", _font_size);
      words.css("font-family", _font_family);
      words.css("color", _color);
      words.css("right", 0);
      words.css("position", "absolute");
      words.css("top", _y_pos);
      words.attr("zoom", 1000);
      $("#danmaku").append(words);
      Barrage.$(words).animate({
        "right" : '100%',
        }, _speed, function() {
          $(words).remove(); //弹幕结束后消失
      });
    };
 
    return {
      launch : launch
    };
  })();
 
  var Action = Barrage.Action = {
 
  };
}).call(this);