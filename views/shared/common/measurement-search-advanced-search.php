<div class="field">
		<div class="two columns alpha">
				<?php echo $this->formLabel('measurement_search_term', __('Measurement Search')); ?>
		</div>
		<div class="inputs five columns omega">
				<p class="explanation">
				<?php
					echo __('You may enter a number in the forms XXXX or XXXX-YYYY. '.
									'You may also select one of the units that you defined to '.
									'limit the search to. Measurement Search will find items '.
									'that contain measurements matching your search. '.
									'For example: "500" will find an item that is either '.
									'500 units high, wide, or deep.');
				?>
				</p>
				<p>
				<?php
					echo $this->formSelect('measurement_search_unit', @$_GET['measurement_search_unit'], array('multiple' => true, 'size' => 4), $selectUnits);
				?>
				</p>
				<p>
				<?php echo $this->formText('measurement_search_term', @$_GET['measurement_search_term'], null, array('size' => 10)); ?>
				</p>
		</div>
</div>
