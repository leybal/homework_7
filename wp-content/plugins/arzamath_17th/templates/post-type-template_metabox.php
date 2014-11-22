<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta A</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_b">Meta B</label>
        </th>
        <td>
            <!--<input type="text" id="meta_b" name="meta_b" value="<?php/* echo @get_post_meta($post->ID, 'meta_b', true)*/; ?>" />-->
            <select  name="Meta_B" id="meta_b" size="3" multiple>
                <option selected value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" >Meta_B_1</option>
                <option value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" >Meta_B_2</option>
                <option value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" >Meta_B_3</option>
            </select>
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_c">Meta C</label>
        </th>
        <td>
            <form enctype="multipart/form-data" action="../post-types/post_type_template.php" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <!-- Название элемента input определяет имя в массиве $_FILES -->
                <input name="userfile" type="file" />
                <input type="submit" value="Send File" />
            </form>

                <!--<input type="text" id="meta_c" name="meta_c" value="<?/*php echo @get_post_meta($post->ID, 'meta_c', true);*/ ?>" />-->
        </td>
    </tr>                
</table>
