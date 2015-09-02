<div class="block ui-tabs-panel active" id="option-ui-id-1" >
<?php $current_options = wp_parse_args( get_option( 'easy_maintenance_mode_general_settings', array() ), general_setting() );
	if(isset($_POST['easy_maintenance_lite_settings_save_1']))
	{	
		if(isset($_POST['easy_maintenance_lite_settings_save_1'])) 
		{

				$current_options['status']=$_POST['status'];	
				$current_options['headline']=$_POST['headline'];
				$current_options['description']=$_POST['description'];
				$current_options['google_code']=stripcslashes($_POST['google_code']);
				$current_options['fb']=$_POST['fb'];
				$current_options['twit']=$_POST['twit'];
				$current_options['gp']=$_POST['gp'];
				
				update_option('easy_maintenance_mode_general_settings',$current_options);
		}	
		if(isset($_POST['easy_maintenance_lite_settings_reset_1'])) 
		{
			$current_options['status']='1';
			$current_options['headline']='Site is under maintenance';
			$current_options['description']='Site will be launching soon, Thanks for visit Our site';
			$current_options['google_code']='';
			$current_options['fb']='';
			$current_options['twit']='';
			$current_options['gp']='';

			update_option('easy_maintenance_mode_general_settings',$current_options);
		}
	}  ?>
	<form method="post" action="#section_general">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Quick Start Settings','easymaintenance');?></h2></td>
				<td style="width:30%;">
					<div class="easy_maintenance_lite_settings_loding" id="easymaintenance_loding_1_image"></div>
					<div class="easy_maintenance_lite_settings_massage" id="easy_maintenance_lite_settings_save_1_success" ><?php _e('Options data successfully Saved','easymaintenance');?></div>
					<div class="easy_maintenance_lite_settings_massage" id="easy_maintenance_lite_settings_save_1_reset" ><?php _e('Options data successfully reset','easymaintenance');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="submit" name="easy_maintenance_lite_settings_reset_1" value="Restore Defaults">&nbsp;
					<input class="button button-primary button-large" name="easy_maintenance_lite_settings_save_1" type="submit" value="Save Options">
				</td>
				</tr>
			</table>			
		</div>	
		<?php wp_nonce_field('easy_maintenance_lite_customization_nonce_gernalsetting','easy_maintenance_lite_gernalsetting_nonce_customization'); ?>
		
		<div class="section">
            <div class="element">
            	<h3>Select status</h3>
                <input type="radio" name="status" value="0" id="status"  <?php if($current_options['status']=='0') echo 'checked' ?>/>&nbsp;Disabled<br>
                <input type="radio" name="status" value="1" id="status" <?php if($current_options['status']=='1') echo 'checked' ?>/>&nbsp;Enable Maintenance Mode
            </div>
        </div>

        <div class="section">
            <div class="element">
            	<h3>Headline</h3>
                <input type="text" id="headline" name="headline" placeholder="Site comming soon!"  value="<?php if(!empty($current_options['headline'])){ echo $current_options['headline']; } ?>"/>
            </div>
        </div>

        <div class="section">
            <div class="element">
            	<h3>Description</h3>
                <textarea id="description" name="description" rows="5"><?php if(!empty($current_options['description'])){ echo $current_options['description']; } ?></textarea>
            </div>
        </div>


        <div class="section">
            <div class="element">
            	<h3>Google Codes</h3>
                <textarea id="google_code" name="google_code" rows="5"><?php if(!empty($current_options['google_code'])){ echo $current_options['google_code']; } ?></textarea>
            </div>
        </div>

        <div class="section">
            <div class="element">
            	<h3>Enter facebook url</h3>
                <input type="text" id="fb" name="fb" placeholder="Enter facebook url"  value="<?php if(!empty($current_options['fb'])){ echo $current_options['fb']; } ?>"/>
            </div>
        </div>

        <div class="section">
            <div class="element">
            	<h3>Enter twitter url</h3>
                <input type="text" id="twit" name="twit" placeholder="Enter twitter url"  value="<?php if(!empty($current_options['twit'])){ echo $current_options['twit']; } ?>"/>
            </div>
        </div>

        <div class="section">
            <div class="element">
            	<h3>Enter google-plus url</h3>
                <input type="text" id="gp" name="gp" placeholder="Enter google-plus url"  value="<?php if(!empty($current_options['gp'])){ echo $current_options['gp']; } ?>"/>
            </div>
        </div>

		<div id="button_section">
			<input class="button button-primary button-large" name="easy_maintenance_lite_settings_save_1" type="submit" value="Save Options">&nbsp;
			<input class="button" type="submit" name="easy_maintenance_lite_settings_reset_1" value="Restore Defaults">
					
		</div>
		<?php wp_nonce_field('easy_maintenance_security_check','easy_maintenance_headerpage_settings'); ?>
	</form>
</div>