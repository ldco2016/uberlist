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
                   # code...
                 }
              ?>
           </select>
         </div>
      </div>

   <?php

}
    ?>
