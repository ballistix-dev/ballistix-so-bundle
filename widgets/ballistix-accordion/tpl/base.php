<h3 class="widget-title"><?php echo $instance['title'] ?>
</h3>

<?php

$str = 'abcdef';
$shuffled = str_shuffle($str);

if ( ! empty( $instance['a_repeater'] ) ) :

	$items = $instance['a_repeater'];
	$counter = 1;
	?>
	<div class="accordion">
		<div class="accordion-section">

		<?php foreach ( $items as $index => $item ) :  ?>
			
			<?php if ($item['repeat_title']): ?>
				
				<a href="#accordion<?php echo $shuffled . $counter; ?>"
				class="accordion-section-title">
				<?php echo $item['repeat_title']; ?>
				</a>
				
			<?php endif ?>

			<?php if ($item['repeat_text']): ?>
				<div id="accordion<?php echo $shuffled . $counter; ?>" class="accordion-section-content">
					<?php echo wpautop($item['repeat_text']); ?>
				</div>
			<?php endif ?>

			<?php $counter++; ?>

		<?php endforeach; ?>

		</div>
	</div>

<?php endif; ?>