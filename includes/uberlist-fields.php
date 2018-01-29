<?php
 function ul_add_fields_metabox(){
   add_meta_box(
     'ul_todo_fields',
     __('Todo Fields'),
     'ul_todo_fields_callback',
     'todo',
     'normal',
     'default'
   );
 }

 add_action('add_meta_boxes', 'ul_add_fields_metabox');

 // Display Field Metabox Content
 function ul_todo_fields_callback($post){
   wp_nonce_field(basename(__FILE__), 'wp_todos_nonce');
   $ul_todo_stored_meta = get_post_meta($post->ID);
   ?>

      <div class="wrap todo-form">
         <div class="form-group">
           <label for="priority"><?php esc_html_e('Priority', 'ul_domain'); ?></label>
           <select name="priority" id="priority">
             <?php
                 $option_values = array('Low', 'Normal', 'High');
                 foreach ($option_values as $key => $value) {
                   if ($value == $ul_todo_stored_meta['priority'][0]) {
                     ?>
                        <option selected><?php echo $value; ?></option>
                     <?php
                   } else {
                     ?>
                        <option><?php echo $value; ?></option>
                     <?php
                   }
                 }
              ?>
           </select>
         </div>

         <div class="form-group">
           <label for="details"><?php esc_html_e('Details', 'ul_domain'); ?></label>
           <?php
              $content  = get_post_meta($post->ID, 'details', true);
              $editor   = 'details';
              $settings = array(
                'textarea_rows' => 5,
                'media_buttons' => true
              );

              wp_editor($content, $editor, $settings);
            ?>
         </div>

         <div class="form-group">
           <label for="due_date"><?php esc_html_e('Due Date', 'ul_domain'); ?></label>
           <input type="date"
                  name="due_date"
                  id="due_date"
                  value="<?php if(!empty($ul_todo_stored_meta['due_date'])) echo esc_attr($ul_todo_stored_meta['due_date'][0]); ?>">
         </div>
      </div>
   <?php

}
    ?>
