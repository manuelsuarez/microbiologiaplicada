/*jQuery.fn.menu = function(){
	return this.each(function(){
		alert(this.id);	
	})
}*/
/*
jQuery.fn.menu = function(){
    this.each( function(){
        $(this).parent().css({backgroundImage:"url(img/bg-menu-li-activo.png)","width":"105px"});
    });
}*/
jQuery.fn.extend({
    menuActivo: function () {
  /*
    	$("#menu li").hover(function(){
    //		var $clase=$(this).attr('class');
    	//	$("."+$clase+" .li-menu-activo").stop().animate({left:"0px"});
    	},function(){
    		//var $clase=$(this).attr('class');
    		//$("."+$clase+" .li-menu-activo").css({'left':"-120px"});
    	});*/
    	return 0;
    },
    activar: function(){
    	$clase=$(this).attr("class");
		$(".li-menu-activo").stop().animate({left:"0px"});
    	return 0;
    },
    desactivar: function(){
		$(".li-menu-activo").stop().animate({left:"-120px"});  		
  		return 0;
    }
});