(function(){var t,h,s,e,i,n,o,g,c;$("body").length>0&&(t=$(".text_quote .row"),n=$(".gallery"),o=$("#intro"),e=$("footer"),g=$(".push-footer"),s=$("#content"),c=window.innerHeight,h=t.height(),i=e.height(),t.css("height",h),n.css("height",c/1.25),o.css("height",c),e.css("height",i),g.css("height",i+150),s.css("margin-bottom",-i),$(window).on("resize",function(){return c=window.innerHeight,t.css("height",h),n.css("height",c),o.css("height",c),e.css("height",i),g.css("height",i),s.css("margin-bottom",-i)}))}).call(this);