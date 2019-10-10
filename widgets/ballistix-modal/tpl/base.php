

<?php

if ($instance['title']) echo '<h3 class="widget-title">' . $instance['title'] . '</h3>';

echo $instance['modal_type'];
?>


<a data-fancybox="images" href="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_b.jpg" title="Twilight Memories (doraartem)">
	<img src="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_m.jpg" alt="" />
</a>
<a data-fancybox="images" href="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_b.jpg" title="Electrical Power Lines and Pylons disappear over t.. (pautliubomir)">
	<img src="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_m.jpg" alt="" />
</a>
<a data-fancybox="images" href="http://farm2.staticflickr.com/1617/24108587812_6c9825d0da_b.jpg" title="Morning Godafoss (Brads5)">
	<img src="http://farm2.staticflickr.com/1617/24108587812_6c9825d0da_m.jpg" alt="" />
</a>
<a data-fancybox="images" href="http://farm4.staticflickr.com/3691/10185053775_701272da37_b.jpg" title="Vertical - Special Edition! (cedarsphoto)">
	<img src="http://farm4.staticflickr.com/3691/10185053775_701272da37_m.jpg" alt="" />
</a>


<a data-fancybox href="<?php echo $instance['video_media'] ?>">
	<?php
		
	
$url = $instance['video_media'];
parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
   
		?>
	<img src="http://img.youtube.com/vi/<?php echo $my_array_of_vars['v'];  ?>/sddefault.jpg" alt="">
</a>


<a data-fancybox data-src="#hidden-content" href="javascript:;">
	Trigger the fancybox
</a>

<div style="display: none;" id="hidden-content">
	<h2>Hello</h2>
	<p>You are awesome.</p>
</div>