<?php /*
template name: search
*/?>
<?php get_header(); ?>

<div id="container">
	
	<div id="header_logo">
  	<img src="<?php bloginfo('template_url');?>/imgs/logo.png" id="logo"/>
	</div>
  
  <div id="header_image">
  	<img src="<?php bloginfo('template_url');?>/imgs/header_img.jpg"/>
	</div>
  
  <div id="menu">
  	<ul>
    	<li id="menu_1"><a href="index.html">Welkom</a></li>
      <li id="menu_2"><a href="landgoed.html">Landgoed & Omgeving</a></li>
      <li id="menu_3"><a href="faciliteiten.html">Faciliteiten</a></li>
      <li id="menu_4"><a href="reserveren.html">Reserveringen & Tarieven</a></li>
      <li id="menu_5"><a href="contact.html">Contact</a></li>
    </ul>
	</div>
  
  <div id="content_wrapper">
    
    <div id="content">
      <div class="area">
      	aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
        <?php if (have_posts()){
          while (have_posts()){
            the_post();
            the_title();
            the_content();
          }
        } ?>
      </div>
    </div>


    
<?php get_sidebar(); ?>

<?php get_footer(); ?> 