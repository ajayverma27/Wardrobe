   <?php 

        if(!empty($cartdata)){
            foreach($cartdata as $cdata){
                $product_details = json_decode($cdata->product_details);
               
   ?>

   <tr class="all-cart get-clone" id="cart-<?=$cdata->id?>" >
        <td class="add-more" >
            <input type="hidden"  name="exist[]" value="1">
            <input type="hidden"  name="exist_ids[]" value="<?=$cdata->id?>">
        </td>

        <td><input type="text" class="form-control" name="width[]" required value="<?=$product_details->width?>"></td>
        <td><input type="text" class="form-control" name="height[]" required value="<?=$product_details->height?>"></td>


        <td class="td_fixed">
            <select class="form-select select select_table_td" name="dtd_thickenss[]" required>
                <option>Select</option>
                <option value="10" <?=$product_details->dtdt==10?'selected':''?> >10 mm</option>
                <option value="18" <?=$product_details->dtdt==18?'selected':''?> >18 mm</option>
                <option value="28" <?=$product_details->dtdt==28?'selected':''?> >28 mm</option>
                <option value="36" <?=$product_details->dtdt==36?'selected':''?> >36 mm</option>
            </select>

        </td>
        <td class="td_fixed">
            <select class="form-select select select_table_td" name="dtd_material[]" required>
                <option value="">select</option>
                <?php if($materials){
                   foreach($materials as $material){

                ?>
                   <option value="<?=$material->id?>" data-image="<?=base_url($material->image)?>" <?=$material->id==$product_details->dtdm?'selected':''?> >
                    <?=$material->color?></option>
               <?php } }?>
               
            </select>
        </td>



        <td class="blank_td">/</td>
        <td class="td_fixed">
            <select class="form-select select select_table_td" name="galss_thickness[]" required>
                <option>Select</option>
                <option value="10" <?=$product_details->glasst==10?'selected':''?> >10 mm</option>
                <option value="18" <?=$product_details->glasst==18?'selected':''?> >18 mm</option>
                <option value="28" <?=$product_details->glasst==28?'selected':''?> >28 mm</option>
                <option value="36" <?=$product_details->glasst==36?'selected':''?> >36 mm</option>
            </select>

        </td>
        <td class="td_fixed">
            <select  class=" form-select select select_table_td" name="galss_material[]" required>
                <option value="">select</option>
                <?php if($materials){
                   foreach($materials as $material){
                ?>
                   <option value="<?=$material->id?>" data-image="<?=base_url($material->image)?>" <?=$material->id==$product_details->glassm?'selected':''?>>
                    <?=$material->color?></option>
               <?php } }?>
               
            </select>
        </td>
        <td class="td_fixed">
            <select class="form-select select_table_td" name="frame_id[]" required>
                <option>Select</option>
                <?php if($frame_data){
                   foreach($frame_data as $material){
                ?>
                   <option value="<?=$material->id?>" <?=$material->id==$product_details->frame?'selected':''?>>
                    <?=$material->name?></option>
               <?php } }?>
            </select>
        </td>
        <td class="td_fixed">
            <select class="form-select select_table_td" name="typea_id[]" required>
                <option>Select</option>
                <?php if($typea_data){
                   foreach($typea_data as $material){
                ?>
                   <option value="<?=$material->id?>"  <?=$material->id==$product_details->typea?'selected':''?>>
                    <?=$material->name?></option>
               <?php } }?>
            </select>
        </td>
        <td class="td_fixed">
            <select class="form-select select_table_td" name="typeb_id[]" required>
                <option>Select</option>
                <?php if($typeb_data){
                   foreach($typeb_data as $material){
                ?>
                   <option value="<?=$material->id?>"  <?=$material->id==$product_details->typeb?'selected':''?>>
                    <?=$material->name?></option>
               <?php } }?>
            </select>
        </td>
        <td><input type="text" class="form-control" value="<?=$product_details->depth?>" name="depth[]" required></td>
        <td><input type="text" class="form-control td_cstm_input" value="<?=$product_details->pcs?>" name="pcs[]" required> </td>
        <td class="trash_td" onclick="delete_cart('<?=$cdata->id?>')"><img src="assests/admin-assets/images/trash.svg" alt="" srcset=""></td>
    </tr>

    <?php } } ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
        $('.my-select').select2({
            templateResult: formatState,
            templateSelection: formatState,
            placeholder: 'Select',
            allowClear: true
        });
    </script>