
<div class="col-xs-12 col-sm-9">

<?php echo form_open('inicio/crawl'); ?>


<div class="bs-callout bs-callout-info">
		<p class="text-primary">
		
		
		<?php
		
		foreach ($info as $paginas){
			
		echo $paginas."<br>";	
			
		}
		?>
		</p>
	</div>



<?php echo form_close();?>


</div>
