<div class="wrap">
    <h2><?php echo $this->plugin->displayName; ?> &raquo; <?php _e('Settings', $this->plugin->name); ?></h2>
           
    <?php    
    if (isset($this->message)) {
        ?>
        <div class="updated fade"><p><?php echo $this->message; ?></p></div>  
        <?php
    }
    if (isset($this->errorMessage)) {
        ?>
        <div class="error fade"><p><?php echo $this->errorMessage; ?></p></div>  
        <?php
    }
    ?> 
    
    <div id="poststuff">
    	<div id="post-body" class="metabox-holder columns-2">
    		<!-- Content -->
    		<div id="post-body-content">
				<div id="normal-sortables" class="meta-box-sortables ui-sortable">                        
	                <div class="postbox">
	                    <h3 class="hndle"><?php _e('Where do you want ads to display?', $this->plugin->name); ?></h3>
	                    
	                    <div class="inside">
		                    <form action="edit.php?post_type=<?php echo $this->plugin->posttype; ?>&page=<?php echo $this->plugin->name; ?>" method="post">
		                    	<p>
									<?php
									$postTypes = get_post_types(array(
										'public' => true,
									), 'objects');
									if ($postTypes) {
										foreach ($postTypes as $postType) {
											// Skip attachments
											if ($postType->name == 'attachment') {
												continue;
											}
											?>
											<label for="<?php echo $postType->name; ?>"><?php echo $postType->labels->name; ?></label>
											<input type="checkbox" name="<?php echo $this->plugin->name; ?>[<?php echo $postType->name; ?>]" value="1" id="<?php echo $postType->name; ?>" <?php echo (isset($this->settings[$postType->name]) ? ' checked' : ''); ?>/>
											<?php
										}
									}
									?>
								</p>  
								                    
								<p>
									<input name="submit" type="submit" name="Submit" class="button button-primary" value="Save settings" /> 
								</p>
						    </form>
	                    </div>
	                </div>
	                <!-- /postbox -->
	                
	                <div id="wpbeginner" class="postbox">
	                    <h3 class="hndle"><?php _e('Latest from WPBeginner', $this->plugin->name); ?></h3>
	                    
	                    <div class="inside">
		                    <?php 
							$this->dashboard->outputDashboardWidget();
							?>
	                    </div>
	                </div>
	                <!-- /postbox -->
				</div>
				<!-- /normal-sortables -->
    		</div>
    		<!-- /post-body-content -->
    		
    		<!-- Sidebar -->
    		<div id="postbox-container-1" class="postbox-container">
    			<?php require_once($this->plugin->folder.'/_modules/dashboard/views/sidebar-donate.php'); ?>		
    		</div>
    		<!-- /postbox-container -->
    	</div>
	</div>      
</div>