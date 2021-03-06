<div id="noteStream">

	<!-- DIV for an normal wall stream -->
	<div class="s2_stream" style="display:none">

		<div class="s2_streamContent"></div>
		<div class="loader streamLoader"></div>

		<div class="emptyStreamMessage">
				<div class="placeholder_text">
                    <i class="icon-frown"></i> <?php echo Yii::t('NotesModule.widgets_views_stream', 'There are no notes yet!'); ?>
				</div>
		</div>

		<div class="emptyFilterStreamMessage">
				<div class="placeholder_text">
                    <i class="icon-frown"></i> <?php echo Yii::t('NotesModule.widgets_views_stream', 'No notes found which matches your current filter(s)!'); ?>
				</div>
		</div>

	</div>

	<!-- DIV for an single wall entry -->
	<div class="s2_single" style="display: none;">
                <div class="back_button_holder">
                    <a href="#" class="singleBackLink button_white"><?php echo Yii::t('NotesModule.widgets_views_stream', 'Back to stream'); ?></a>
                </div>
                <div class="p_border"></div>

		<div class="s2_singleContent"></div>
		<div class="loader streamLoaderSingle"></div>
	</div>
</div>


<script>
	// Kill current stream
	if (currentStream) {
		currentStream.clear();
	}

	s = new Stream("#noteStream", "<?php echo $startUrl;?>", "<?php echo $reloadUrl;?>", "<?php echo $singleEntryUrl;?>");
	s.showStream();
	currentStream = s;

</script>


