<?php
remove_action( 'woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open', 10 );
add_action ( 'woocommerce_before_shop_loop_item', 'ami_function_open_new_tab', 10 );
function ami_function_open_new_tab() {
echo '<a target="_blank" href="' . get_the_permalink() . '" class="woocommerce-LoopProduct-link">';
}
