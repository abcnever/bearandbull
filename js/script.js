// <![CDATA[

// Cufon
Cufon.replace('h1, h2, h3, h4, h5, h6, .menu_nav ul li a, .content .mainbar a.rm', { hover: true });
//Cufon.replace('h1', { color: '-linear-gradient(#fff, #ffaf02)'});
//Cufon.replace('h1 small', { color: '#8a98a5'});

// ]]>

$(document).ready(function() {
  $(".menu_nav ul.nav_main > li:not(.active)").hover(function() {
	$(this).addClass("active");
  },function() {
	$(this).removeClass("active");
  });
  
  $(".menu_nav ul.nav_main > li").hover(function() {
	$(this).children("ul.nav_sub").stop("true","true").slideDown(300,"swing");
  },function() {
    $(this).children("ul.nav_sub").stop("true","true").slideUp(300,"swing");
  });
  
  $("ul.nav_sub > li:not(.active)").hover(function() {
	$(this)[0].className = "active";
  },function() {
	$(this)[0].className = "";
  });
});