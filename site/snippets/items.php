<?php

// config

$section_name = reset($section);

$class = $section[1];

$path = page($section[2])->{$section_name}()->toStructure();
  
?>

<div class="<?php echo $class ?>" id="<?php echo $class ?>">
<h2 class="wow fadeInLeft"><a href="#<?php echo $class ?>"><?php echo $class ?? $page->{$section_name . 'Title'}() ?></a></h2>

<div class="content">

  <?php
	    
  $x = 0;
  
  foreach($path as $item):
  
  $x++; ?>  
  
  	<?php if($item->url()->isEmpty()): ?>
  	
      <div class="item wow fadeIn <?php if(!$item->button()->isEmpty()){ echo 'pointer' . ' btn-' . $class . '-' . $x ;}?>" data-wow-delay="<?php echo $x ?>00ms" href="<?php echo $item->url() ?>">

	<?php else: ?>

      <a class="item wow fadeIn" data-wow-delay="<?php echo $x ?>00ms" href="<?php echo $item->url() ?>">
	      
	<?php endif ?>
		
		<?php // TITLE
			
			if(!$item->title()->isEmpty()){ ?>
	    	<div class="title"><?php echo $item->title() ?></div>
	    <?php } ?>

		<?php // SUBTITLE
			
			if(!$item->subtitle()->isEmpty()){ ?>
			<div class="subtitle"><?php echo $item->subtitle() ?></div>
	    <?php } ?>
	    
	    <?php // TEXT
			
			if(!$item->text()->isEmpty()){ ?>
			<div class="text"><?php echo $item->text()->kirbytext() ?></div>
	    <?php } ?>

	    <?php // BUTTON
			
			if(!$item->button()->isEmpty()){ ?>
			<div class="ext-<?php echo $class ?>-<?php echo $x ?>"><?php echo $item->button()->kirbytext() ?></div>

			<script>
			$('div.<?php echo $class ?> div.btn-<?php echo $class ?>-<?php echo $x ?>').click(function() {
			$('div.ext-<?php echo $class ?>-<?php echo $x ?>').fadeIn();
			$('body').css({'overflow':'hidden'});
// 			$('div.extension').show();
			});
			
			$('div.ext-<?php echo $class ?>-<?php echo $x ?>').click(function() {
			$('div.ext-<?php echo $class ?>-<?php echo $x ?>').fadeOut();
			$('body').css({'overflow':'unset'});
// 			$('div.extension').hide();
			});			
			</script>

	    <?php } ?>

	    <?php // EMAIL
			
			if(!$item->email()->isEmpty()){ ?>
			<a class="email" href="mailto:<?php echo $item->email() ?>"><?php echo $item->email() ?></a>
	    <?php } ?>

	    <?php // PHONE
		    
			if(!$item->phone()->isEmpty()){ ?>
			<div class="phone"><?php echo $item->phone() ?></div>
	    <?php } ?>

	    <?php // ADDRESS
		    
			if(!$item->address()->isEmpty()){ ?>
			<div class="address"><?php echo $item->address()->kirbytext() ?></div>

		<?php } ?>

	    <?php // LIST
		    
		    if(!$item->item_list()->isEmpty()){ ?>
		    
		    <ul class="list">
		    
			<?php foreach($item->item_list()->yaml() as $items): ?>
							
			<li><?php echo $items ?></li>
				
			<?php endforeach ?>
		
			</ul>

		<?php } ?>


	    <?php // VIDEO
		    
			if(!$item->video()->isEmpty()){ 
				
			$videoLS = $item->video()->toFile()->url();
				
			?>

			<video autoplay muted loop playsinline="yes" preload="auto" autobuffer="auto" 
			
			src="<?php echo $videoLS ?>"
			
			id="video1" class="video">
								
			<p>Sorry, your browser does not support the video.</p>
			
			</video>	

	    <?php } ?>
		
		<?php // IMAGE
			
			if(!$item->image()->isEmpty()){ ?>
			
			<?php 
				
			$i = 0;
				
			foreach($item->image()->toStructure() as $image):
			
			$i++;
			
			?>

			<img class="<?php echo 'img' . $i ?> wow fadeIn"
				src="<?php    echo thumb($image->image($image)->toFile(), array('width' => 100))->url() ?>"
				srcset="<?php echo thumb($image->image($image)->toFile(), array('width' => 160))->url() ?> 200w,
						<?php echo thumb($image->image($image)->toFile(), array('width' => 320))->url() ?> 400w,
						<?php echo thumb($image->image($image)->toFile(), array('width' => 640))->url() ?> 600w,
						<?php echo thumb($image->image($image)->toFile(), array('width' => 800))->url() ?> 800w,
						<?php echo thumb($image->image($image)->toFile(), array('width' => 1600))->url() ?> 1600w"
				sizes="(max-width: 480px) 100vw, (max-width: 900px) 33vw, 100vw">
			
			<?php endforeach ?>
			
				
	    <?php } ?>


  	<?php if($item->url()->isEmpty()): ?>

      </div>

	<?php else: ?>

      </a>
	
	<?php endif ?>

<?php endforeach ?>

</div>

</div>