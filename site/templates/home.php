<!DOCTYPE html>

<head>

<meta charset="utf-8">
<title>Oliver Puhlmann</title>
<meta name="description" content="Agentur Oliver Puhlmann">

<?php echo css('assets/css/main.css') ?>
    
<script src=""></script>

<meta name="viewport" content="width=device-width, initial-scale=1" />
	
<?php echo css('assets/css/animate.css') ?>

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,400,700|Nunito:200,400,700|Roboto+Mono|Playfair+Display|Gravitas+One" rel="stylesheet">

<?php echo js('assets/js/wow.min.js') ?>
<?php echo js('assets/js/jquery-1.12.1.min.js') ?>


<script type="text/javascript">

// wow js init

	new WOW().init();

// Scroll-to

$(document).ready(function(){
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash,
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 800, 'swing', function () {
                window.location.hash = target;
            });
        });
});

</script>


</head>
<body>

<div class="main" id="home">
	
<div class="cookie" style="font-size: 0.8rem !important;">Cookies<br><span>Um unsere Webseite für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.
Weitere Informationen zu Cookies erhalten Sie in unserer Datenschutzerklärung</span></div>

<?php snippet('items', array('section' => array('navigation', 'navigation', 'home'))) ?>

<?php snippet('items', array('section' => array('stage', 'stage', 'home'))) ?>

<?php snippet('items', array('section' => array('social', 'social', 'home'))) ?>

<?php snippet('items', array('section' => array('about', 'about', 'home'))) ?>

<?php snippet('items', array('section' => array('brands', 'brands', 'home'))) ?>

<?php //snippet('items', array('section' => array('brands', 'brands', 'home'))) ?>

<?php snippet('items', array('section' => array('team', 'team', 'home'))) ?>

<?php snippet('items', array('section' => array('gallery', 'showroom', 'home'))) ?>

<?php snippet('items', array('section' => array('kontakt', 'kontakt', 'home'))) ?>

</div>

<?php snippet('items', array('section' => array('navigation1', 'footer', 'home'))) ?>

<div class="extension">

<script>

// move div to extension 
$('[class^=ext-]').appendTo('body'); //appendTo

// extension click event

// basic animations	
//$( "a.moduleTitle" ).addClass( "wow fadeInUp");
	

			$('div.cookie').click(function() {
			$('div.ext-footer-7').fadeIn();
			$('body').css({'overflow':'hidden'});
// 			$('div.extension').show();
			});
			
			$('div.ext-footer-7').click(function() {
			$('div.ext-footer-7').fadeOut();
			$('body').css({'overflow':'unset'});
// 			$('div.extension').hide();
			});			
					

</script>

</body>
</html>