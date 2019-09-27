<?php
if ($instance['title']) echo '<h3 class="widget-title">' . $instance['title'] . '</h3>';

if ( ! empty( $instance['a_repeater'] ) ) :

	$items = $instance['a_repeater'];

	echo '<ul class="accordion-tabs">';

  foreach ( $items as $index => $item ) :  ?>

      <li class="tab-header-and-content">
        <a href="javascript:void(0)" class="tab-link"><?php echo $item['repeat_title']; ?></a>

        <?php if ($item['repeat_text']): ?>
  				<div class="tab-content">
  					<?php echo wpautop($item['repeat_text']); ?>
  				</div>
  			<?php endif ?>

      </li>

		<?php endforeach;

  echo '</ul>';

endif; ?>
