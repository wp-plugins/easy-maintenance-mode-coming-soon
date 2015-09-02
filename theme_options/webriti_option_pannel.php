<?php
if($_POST)
	 {
			$checkone = wp_verify_nonce($_POST['easy_maintenance_headerpage_settings'], 'easy_maintenance_security_check');
			$checktwo = wp_verify_nonce($_POST['easy_maintenance_groundpageback_settings'], 'easy_maintenancebgpagesetting_security_check');
			$checkthree  = wp_verify_nonce($_POST['easy_maintenance_settingstextcolorpage_settings'], 'easy_maintenancecolortextsetingpage_security_check');
		
			if($checkone == 1 || $checktwo == 1 || $checkthree == 1 )
			{
				
			}
			else
			{
				echo "Sorry given field are not correct";
				exit;
			}
			
			
	 }
?>
<div class="wrap settings-wrap" id="page-settings">
    <h2><?php _e('Settings >>','easymaintenance'); ?></h2>
    <div id="option-tree-header-wrap">
        <ul id="option-tree-header">
            <li id=""><a href="" target="_blank"></a></li>
            <li id="option-tree-version"><span><?php _e('Easy Maintenance Mode','easymaintenance'); ?></span></li>
			<a style="margin-right:16px;" target="_blank" href="<?php bloginfo("url"); ?>/?easy_maintenance_mode_preview=true&TB_iframe=true&width=500&height=532" class="button button-primary button-large fb-btn"><?php _e('Preview','easymaintenance'); ?></a>
			<a style="margin-right:16px;" target="_blank" href="http://webriti.com/easy-coming-soon-pro-detail-page/" class="button button-primary button-large fb-btn"><?php _e('Upgrade to Pro version','easymaintenance'); ?></a>
            <a style="margin-right:16px;" target="_blank" href="https://wordpress.org/plugins/easy-maintenance-mode-coming-soon/" class="button button-primary button-large fb-btn"><?php _e('Rate us on wordpress','easymaintenance'); ?></a>
        </ul>
		
    </div>
    <div id="option-tree-settings-api">
    <div id="option-tree-sub-header"></div>
        <div class = "ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul>
				
                <li id="tab_create_setting"><a href="#section_general"><?php _e('General Settings','easymaintenance');?></a>
                </li>
				<li id="tab_background_setting"><a href="#section_background"><?php _e('Background Settings','easymaintenance');?></a>
                </li>
                <li id="tab_text-color_setting"><a href="#section_text-color"><?php _e('Text & Color','easymaintenance');?></a>
                </li>
                <li id="tab_live_preview_setting"><a href="#section_live_preview"><?php _e('Live Preview','easymaintenance');?></a>
                </li>
                <li id="tab_templates_setting"><a href="#section_templates"><?php _e('Templates','easymaintenance');?></a>
                </li>
                <li id="tab_pro_setting"><a href="#section_pro"><?php _e('Pro Features','easymaintenance');?></a>
                </li>
				<li id="tab_aboutproversion"><a href="#section_aboutproversion"><?php _e('Whats included in the Pro Version','easymaintenance');?></a>
                </li>
				<li id="tab_section_lovetab"><a href="#section_lovetab"><?php _e('Show Some Love','easymaintenance');?></a>
                </li>
				<li id="tab_section_videotab"><a href="#section_videotab"><?php _e('Video Tutorial','easymaintenance');?></a>
                </li>
               
            </ul>
    <div id="poststuff" class="metabox-holder">
        <div id="post-body" style="min-height:400px;">
			<div id="post-body-content">
                <div id="section_general" class = "postbox">
                    <div class="inside">
                        <div id="setting_theme_options_ui_text" class="format-settings">
                            <div class="format-setting-wrap">             
                    <?php load_template( dirname( __FILE__ ) . '/pages/header_page_settings.php' );  ?>    
                </div>
            </div>
        </div>
    </div>

    
	<div id="section_background" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
      <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
		<?php  load_template( dirname( __FILE__ ) . '/pages/backgorund_page_settings.php' ); ?>
                                              
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>


    <div id="section_text-color" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
      <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
        <?php  load_template( dirname( __FILE__ ) . '/pages/text_color_page_setting.php' ); ?>
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="section_live_preview" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
      <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
        <?php  load_template( dirname( __FILE__ ) . '/pages/live_preview_settings.php' ); ?>
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="section_templates" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
					<div class = "format-setting type-textarea has-desc">
						<div class = "format-setting-inner">
        
        <?php  load_template( dirname( __FILE__ ) . '/pages/templates_settings.php' ); ?>
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="section_pro" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
					<div class = "format-setting type-textarea has-desc">
						<div class = "format-setting-inner">
        
        <?php  load_template( dirname( __FILE__ ) . '/pages/pro_features_settings.php' ); ?>
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div id="section_aboutproversion" class="postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
					<div class = "format-setting type-textarea has-desc">
						<div class = "format-setting-inner">
        
        <?php  load_template( dirname( __FILE__ ) . '/pages/about_pro_version.php' ); ?>
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div id="section_lovetab" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
				  <div class = "format-setting type-textarea has-desc">
					<div class = "format-setting-inner">
						<div class="block ui-tabs-panel active" id="option-ui-id-5" >
							<form method="post" id="commingsoon_lite_theme_options_5">
									<div id="heading">
										<table style="width:100%;"><tr>
											<td><h2><?php _e('Show Some Love','commingsoon');?></h2>
											<br>
											<p>Like this plugin? Show your support by:</p>
											</td>
											<td style="width:30%;">
											</td>
											<td style="text-align:right;">					
												
											</tr>
										</table>			
									</div>

									<div class="section">
										<a class="button button-primary button-large" target="_blank" href="https://wordpress.org/support/view/plugin-reviews/easy-maintenance-mode-coming-soon">Rate It</a>
										<a class="button button-primary button-large" target="_blank" href="http://twitter.com/share?url=https%3A%2F%2Fwordpress.org%2Fplugins%2Feasy-coming-soon%2F&amp;text=Check out this awesome %23WordPress Plugin I'm using,  Easy Coming Soon by @webriti"><i class="fa fa-twitter"></i>Tweet It</a>
										<a class="button button-primary button-large" target="_blank" href="http://webriti.com/easy-coming-soon-pro-detail-page/">Buy Pro</a>
									</div>	
							</form>
						</div>								  
					</div>
				</div>
				</div>
			</div>
		</div>
    </div>
	
	
	<div id="section_videotab" class="postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
				  <div class = "format-setting type-textarea has-desc">
					<div class = "format-setting-inner">
						<div class="block ui-tabs-panel active" id="option-ui-id-5" >
							<form method="post" id="commingsoon_lite_theme_options_5">
									<div id="heading">
										<table style="width:100%;"><tr>
											<td><h2><?php _e('Fully Functional Coming Soon Page in 30 minutes','commingsoon');?></h2>
											<br>
											<p>In this <a target = "_blank" href = "https://www.youtube.com/watch?v=jwXOO9DDSpY"> Video Tutorial </a> , I will demonstrate how you can create a fully functional Coming Soon Page in as little as 30 minutes.</p>
											<p> Here is what we the Landing page will look like.
											<div class="span6" style="width:100%">
		<img  style="height:50%; width:50%" src="<?php echo plugins_url('/pages/images/img/video-thumb.jpg',__FILE__);?>" alt="" style="width:100%"> 
	</div>
                                            <br></br>
											
											<b>This video tutorial is for the premium version of the plugin. As you can see, it has:</b>
										    <br></br>
											
											<ul>1. Company Logo</ul>
											<ul>2. An Image Slide Show BackGround</ul>
											<ul>3. Email Capture Box, with option to Capture First Name and Last Name</ul>
											<ul>4. CountDown Timer</ul>
											<ul>5. A Progress Bar</ul>
											<ul>6. Social Media Icons</ul>
											<ul>7. The Video also contains a brief overview of the features like Multiple Templates, Ip based access, Newsletter Integration etc. </ul>
											
											
										</p>The premium version is priced at 29 USD and lets you use the plugin on unlimited website. </p>
											<p>Here is the <a target = "_blank" href = "https://youtu.be/JEbKUdvbzys">link to the Video.</a> Enjoy!!!</p>
											</td>
											<td style="width:30%;">
											</td>
											<td style="text-align:right;">					
												
											</tr>
										</table>			
									</div>

									
							</form>
						</div>								  
					</div>
				</div>
				</div>
			</div>
		</div>
    </div>
	

		</div>
    </div>
    </div>
	<div class="webriti-submenu" style="height:35px;">			
            <div class="webriti-submenu-links" style="margin-top:5px;">
			<form method="POST">
				<input type="submit" onclick="return confirm( 'Click OK to reset theme data. Theme settings will be lost!' );" value="Restore All Defaults" name="restore_all_defaults" id="restore_all_defaults" class="reset-button btn">
			<form>
            </div><!-- webriti-submenu-links -->
        </div>
        <div class="clear"></div>
        </div>
    </div>
</div>

<?php
// Restore all defaults
if(isset($_POST['restore_all_defaults'])) 
	{
		update_option('easy_maintenance_mode_general_settings',general_setting());
        update_option('easy_maintenance_mode_text_design_setting',text_design_setting());
        update_option('easy_maintenance_mode_background_setting_save',background_setting());
	}
?>