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
                <!--<li id="tab_templates_setting"><a href="#section_templates"><?php _e('Templates','easymaintenance');?></a>
                </li>
                <li id="tab_live_preview_setting"><a href="#section_live_preview"><?php _e('Live Preview','easymaintenance');?></a>
                </li>-->
                <li id="tab_templates_setting"><a href="#section_templates"><?php _e('Templates','easymaintenance');?></a>
                </li>
                <li id="tab_pro_setting"><a href="#section_pro"><?php _e('Pro Features','easymaintenance');?></a>
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

    <!--<div id="section_templates" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
      <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        

                                              
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
        
        
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->


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