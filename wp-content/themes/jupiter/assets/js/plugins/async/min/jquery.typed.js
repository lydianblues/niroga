!function(t){"use strict";var s=function(s,o){this.el=t(s),this.options=t.extend({},t.fn.typed.defaults,o),this.text=this.el.text(),this.typeSpeed=this.options.typeSpeed,this.startDelay=this.options.startDelay,this.backSpeed=this.options.backSpeed,this.backDelay=this.options.backDelay,this.strings=this.options.strings,this.strPos=0,this.arrayPos=0,this.string=this.strings[this.arrayPos],this.stopNum=0,this.loop=this.options.loop,this.loopCount=this.options.loopCount,this.curLoop=1,this.loop===!1?this.stopArray=this.strings.length-1:this.stopArray=this.strings.length,this.build()};s.prototype={constructor:s,init:function(){var t=this;setTimeout(function(){t.typewrite(t.string,t.strPos)},t.startDelay)},build:function(){this.el.after('<span id="typed-cursor">|</span>'),this.init()},typewrite:function(t,s){var o=Math.round(70*Math.random())+this.typeSpeed,e=this;setTimeout(function(){if(e.arrayPos<e.strings.length){if("^"===t.substr(s,1)){var o=t.substr(s+1).indexOf(" "),i=t.substr(s+1,o);t=t.replace("^"+i,"")}else var i=0;setTimeout(function(){if(e.el.text(e.text+t.substr(0,s)),s>t.length&&e.arrayPos<e.stopArray){clearTimeout(o),e.options.onStringTyped();var o=setTimeout(function(){e.backspace(t,s)},e.backDelay)}else if(s++,e.typewrite(t,s),e.loop===!1&&e.arrayPos===e.stopArray&&s===t.length){var o=e.options.callback();clearTimeout(o)}},i)}else e.loop===!0&&e.loopCount===!1?(e.arrayPos=0,e.init()):e.loopCount!==!1&&e.curLoop<e.loopCount&&(e.arrayPos=0,e.curLoop=e.curLoop+1,e.init())},o)},backspace:function(t,s){var o=Math.round(70*Math.random())+this.backSpeed,e=this;setTimeout(function(){if(e.el.text(e.text+t.substr(0,s)),s>e.stopNum)s--,e.backspace(t,s);else if(s<=e.stopNum){clearTimeout(o);var o=e.arrayPos=e.arrayPos+1;e.typewrite(e.strings[e.arrayPos],s)}},o)}},t.fn.typed=function(o){return this.each(function(){var e=t(this),i=e.data("typed"),a="object"==typeof o&&o;i||e.data("typed",i=new s(this,a)),"string"==typeof o&&i[o]()})},t.fn.typed.defaults={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],typeSpeed:0,startDelay:0,backSpeed:0,backDelay:500,loop:!1,loopCount:!1,callback:function(){},onStringTyped:function(){}}}(window.jQuery);