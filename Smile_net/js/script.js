// JS
jQuery(document).ready(function() {
  
 
	// Menu Scroll
  	jQuery(window).scroll(function(){
      	var top = jQuery(window).scrollTop(); 

     
        if(top > 200){
            jQuery(".topo").addClass("scroll");
            jQuery(".topo").stop().animate({ top: "-2px" }, 250);
           
      	}else{ 
         	jQuery(".topo").removeClass("scroll");
            jQuery(".topo").stop().animate({ top: "-10px" }, 200);
            
        }  
    });

  	// Menu Mobile
    jQuery("a.exibir-menu").click(function() {
        jQuery(".menu-superior").toggleClass("exibir-menu-mobile"); 
        jQuery(".mascara").toggleClass("show");
    });

  	jQuery(".menu-superior a").click(function() {
        jQuery(".menu-superior").toggleClass("exibir-menu-mobile"); 
        jQuery(".mascara").removeClass("show");           
  	});
    jQuery("a.bt-mb").click(function() {
        jQuery(".menu-superior").removeClass("exibir-menu-mobile"); 
        jQuery(".mascara").removeClass("show");           
    });

       

  


  });
