$(document).ready(function () {

    /*
    * Service table append
    */
    if (jQuery('.service_table .listitems').length == 1) {
        jQuery('.service_table .items_r').hide();
    }

    $(document).on('click', '.service_table .additems', function () {
        var listitems_c = jQuery('#item_count').val();
        listitems_c = parseInt(listitems_c) + 1;
        jQuery('#item_count').val(listitems_c);
        var extend_items = `<tr class="listitems" data-count='${listitems_c}'>
    <td class="prd_data">
        <div class="input-group"><input type="number" id="item_name_${listitems_c}" class="form-control item_name" required="" name="item_name[]"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_product_${listitems_c}"   class="form-control item_product" required="" name="item_product[]"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_product_code_${listitems_c}"   class="form-control item_product_code"  required="" name="item_product_code[]" step="0.01"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_quantity_${listitems_c}"   class="form-control item_quantity"  required="" name="item_quantity[]" step="0.01"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_subscription_fee_${listitems_c}"   class="form-control item_subscription_fee"  required="" name="item_subscription_fee[]" step="0.01"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_product_fee_${listitems_c}"   class="form-control item_product_fee"  required="" name="item_product_fee[]" step="0.01"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_price_${listitems_c}"   class="form-control item_price"  required="" name="item_price[]" step="0.01"></div>
    </td>
    <td class="prd_data">
        <div class="input-group"><input type="text" id="item_total_${listitems_c}"   class="form-control item_total rounded" required="" name="item_total[]" step="0.01"><div class="remove items_r p-2"><i class="fa fa-trash text-danger"></i></div></div>
    </td>
    </tr>`;

        jQuery('.service_table tbody').append(extend_items);
        if (jQuery('.service_table .listitems').length == 1) {
            jQuery('.service_table .items_r').hide();
        } else {
            jQuery('.service_table .items_r').show();
        }
    });

    /*
    * Method table append
    */
//     if (jQuery('.method_table .listmethods').length == 1) {
//         jQuery('.method_table .items_r').hide();
//     }

//     $(document).on('click', '.method_table .additems', function () {
//         var listmethod_c = jQuery('#method_count').val();
//         listmethod_c = parseInt(listmethod_c) + 1;
//         jQuery('#method_count').val(listmethod_c);
//         var extend_items = `<tr class="listmethods" data-count='${listmethod_c}'>   
//     <td class="prd_data">
//         <div class="input-group"><input type="text" id="mathod_name_${listmethod_c}" class="form-control mathod_name" required="" name="mathod_name[]"></div>
//     </td>
//     <td class="prd_data">
//         <div class="input-group"><input type="date" id="mathod_date_${listmethod_c}"  onchange="calculate_method(this)" class="form-control mathod_date"  required="" name="mathod_date[]"></div>
//     </td>
//     <td class="prd_data">
//         <div class="input-group"><input type="number" id="method_total_${listmethod_c}"  onchange="calculate_method(this)" class="form-control method_total rounded" required="" name="method_total[]" step="0.01"><div class="remove items_r p-2"><i class="fa fa-trash text-danger"></i></div></div>
//     </td>
//     </tr>`;

//         jQuery('.method_table tbody').append(extend_items);
//         if (jQuery('.method_table .listmethods').length == 1) {
//             jQuery('.method_table .items_r').hide();
//         } else {
//             jQuery('.method_table .items_r').show();
//         }
//     });
// });

jQuery(document).on('click', '.service_table .items_r', function () {

    jQuery(this).parent().parent().parent().remove();

    if (jQuery('.service_table .listitems').length == 1) {
        jQuery('.service_table .items_r').hide();
    } else {
        jQuery('.service_table .items_r').show();
    }

    var each_item_price = 0;
    jQuery('.item_total').each(function () {
        each_item_price += parseFloat(jQuery(this).val());
    });
    jQuery('.item_grand_total').val(each_item_price.toFixed(2));
});

/*
    * Method table append
    */
// jQuery(document).on('click', '.method_table .items_r', function () {

//     jQuery(this).parent().parent().parent().remove();

//     if (jQuery('.method_table .listmethods').length == 1) {
//         jQuery('.method_table .items_r').hide();
//     } else {
//         jQuery('.method_table .items_r').show();
//     }
// });


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadlogo').attr('src', e.target.result);
            $('#logo_url').val(e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// function calculate(id) {

//     var item_id = id.id,
//         item_value = id.value,
//         split_id = item_id.split("_"),
//         select_field = split_id[1],
//         select_id = split_id[2],
//         qty = jQuery('#item_qty_' + select_id).val() ? jQuery('#item_qty_' + select_id).val() : 0,
//         price = jQuery('#item_price_' + select_id).val() ? jQuery('#item_price_' + select_id).val() : 0,
//         total = jQuery('#item_total_' + select_id).val() ? jQuery('#item_total_' + select_id).val() : 0;
//     if (select_field) {
//         switch (select_field) {
//             case 'qty':
//                 var price = qty * price;
//                 jQuery('#item_total_' + select_id).val((price).toFixed(2));
//                 break;
//             case 'price':
//                 var total_unit = qty * price
//                 jQuery('#item_total_' + select_id).val(total_unit.toFixed(2));
//                 break;
//             default:
//         }
//     }
//     var each_item_price = 0;
//     jQuery('.item_total').each(function () {
//         each_item_price += parseFloat(jQuery(this).val());
//     });
//     jQuery('.item_grand_total').val(each_item_price.toFixed(2));
// }
})