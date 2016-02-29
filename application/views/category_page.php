<div class="container">
   <div class="widget-content-white glossed">
			<div class="padded">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
						   
							<th>CategoryID</th>
							<th>categoryNAme</th>
							
						</tr>
					</thead>
				<?php if (is_array($category)) {?>
   <?php foreach($category as $row) { ?>
   <?php echo '<tr>';
        echo '<td>'.$row->id.'</td>';
        echo '<td>'.$row->name.'</td>';
       
        echo '</tr>';
    }
}?>
				</table>
			</div>
		</div>
	</div>
			</div> 
		</div>  
</div>