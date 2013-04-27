<?php

    if (defined('ALLOW_INCLUDE') === false)
        die('no direct access');

?>

<div class="wrap">
   <a name="recaptcha"></a>
   <h2><?php _e('MJ-reCAPTCHA Options', 'recaptcha'); ?></h2>
   <p><?php _e('MJ-reCAPTCHA is a free, accessible CAPTCHA service that helps to digitize books while blocking spam on your blog.', 'recaptcha'); ?></p>
   
   <form method="post" action="options.php">
      <?php settings_fields('mjrecaptcha_options_group'); ?>

      <h3><?php _e('Authentication', 'recaptcha'); ?></h3>
      <p><?php _e('These keys are required before you are able to do anything else.', 'recaptcha'); ?> <?php _e('You can get the keys', 'recaptcha'); ?>.</p>
      <p><?php _e('Be sure not to mix them up! The public and private keys are not interchangeable!'); ?></p>
      
      <table class="form-table">
         <tr valign="top">
            <th scope="row"><?php _e('Public Key', 'recaptcha'); ?></th>
            <td>
               <input type="text" name="mjrecaptcha_options[public_key]" size="40" value="<?php echo $this->options['public_key']; ?>" />
            </td>
         </tr>
         <tr valign="top">
            <th scope="row"><?php _e('Private Key', 'recaptcha'); ?></th>
            <td>
               <input type="text" name="mjrecaptcha_options[private_key]" size="40" value="<?php echo $this->options['private_key']; ?>" />
            </td>
         </tr>
      </table>
      
      <h3><?php _e('Comment Options', 'recaptcha'); ?></h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row"><?php _e('Activation', 'recaptcha'); ?></th>
            <td>
               <input type="checkbox" id ="mjrecaptcha_options[show_in_comments]" name="mjrecaptcha_options[show_in_comments]" value="1" <?php checked('1', $this->options['show_in_comments']); ?> />
               <label for="mjrecaptcha_options[show_in_comments]"><?php _e('Enable for comments form', 'recaptcha'); ?></label>
            </td>
         </tr>
         
         <tr valign="top">
            <th scope="row"><?php _e('Target', 'recaptcha'); ?></th>
            <td>
               <input type="checkbox" id="mjrecaptcha_options[bypass_for_registered_users]" name="mjrecaptcha_options[bypass_for_registered_users]" value="1" <?php checked('1', $this->options['bypass_for_registered_users']); ?> />
               <label for="mjrecaptcha_options[bypass_for_registered_users]"><?php _e('Hide for Registered Users who can', 'recaptcha'); ?></label>
               <?php $this->capabilities_dropdown(); ?>
            </td>
         </tr>
      </table>
      
      <h3><?php _e('Registration Options', 'recaptcha'); ?></h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row"><?php _e('Activation', 'recaptcha'); ?></th>
            <td>
               <input type="checkbox" id ="mjrecaptcha_options[show_in_registration]" name="mjrecaptcha_options[show_in_registration]" value="1" <?php checked('1', $this->options['show_in_registration']); ?> />
               <label for="mjrecaptcha_options[show_in_registration]"><?php _e('Enable for registration form', 'recaptcha'); ?></label>
            </td>
         </tr>
      </table>
      
      <h3><?php _e('General Options', 'recaptcha'); ?></h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row"><?php _e('reCAPTCHA Form', 'recaptcha'); ?></th>
            <td>
               <label for="mjrecaptcha_options[recaptcha_language]"><?php _e('Language:', 'recaptcha'); ?></label>
               <?php $this->recaptcha_language_dropdown(); ?>
            </td>
         </tr>
         
         <tr valign="top">
            <th scope="row"><?php _e('Standards Compliance', 'recaptcha'); ?></th>
            <td>
               <input type="checkbox" id ="mjrecaptcha_options[xhtml_compliance]" name="mjrecaptcha_options[xhtml_compliance]" value="1" <?php checked('1', $this->options['xhtml_compliance']); ?> />
               <label for="mjrecaptcha_options[xhtml_compliance]"><?php _e('Produce XHTML 1.0 Strict Compliant Code', 'recaptcha'); ?></label>
            </td>
         </tr>
      </table>
      
      <h3><?php _e('Error Messages', 'recaptcha'); ?></h3>
      <table class="form-table">
         <tr valign="top">
            <th scope="row"><?php _e('reCAPTCHA Ignored', 'recaptcha'); ?></th>
            <td>
               <input type="text" name="mjrecaptcha_options[no_response_error]" size="70" value="<?php echo $this->options['no_response_error']; ?>" />
            </td>
         </tr>
         
         <tr valign="top">
            <th scope="row"><?php _e('Incorrect Guess', 'recaptcha'); ?></th>
            <td>
               <input type="text" name="mjrecaptcha_options[incorrect_response_error]" size="70" value="<?php echo $this->options['incorrect_response_error']; ?>" />
            </td>
         </tr>
      </table>

      <p class="submit"><input type="submit" class="button-primary" title="<?php _e('Save MJ-reCAPTCHA Options') ?>" value="<?php _e('Save MJ-reCAPTCHA Changes') ?> &raquo;" /></p>
   </form>
   
   <?php do_settings_sections('mjrecaptcha_options_page'); ?>
</div>
