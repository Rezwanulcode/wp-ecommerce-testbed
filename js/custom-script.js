// jQuery(document).ready(function($) {
//     var cartTotal = $('.cart-total-amount');
//     $.ajax({
//         type: 'GET',
//         dataType: 'html',
//         url: wc_cart_fragments_params.ajax_url,
//         data: {
//             action: 'get_cart_total'
//         },
//         success: function(result) {
//             cartTotal.html(result);
//         }
//     });
// });
jQuery(document).ready(function($) {
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        data: {
            'action': 'get_cart_total'
        },
        success: function(response) {
            $('.total-price').html(response);
        }
    });
});