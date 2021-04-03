<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay = 'inc/backend/views/inc_side_overlay.php';
$dm->inc_sidebar = 'inc/backend/views/inc_sidebar.php';
$dm->inc_header = 'inc/backend/views/inc_header.php';
$dm->inc_footer = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$dm->l_sidebar_dark = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style = 'light';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav = array(
    array(
        'name' => 'Orders',
        'icon' => 'fa fa-clone',
        'url' => 'be_pages_ecom_orders.php'
    ),
    array(
        'name' => 'Products',
        'url' => 'be_pages_ecom_products.php',
        'icon' => 'fa fa-boxes'
    ),
    array(
        'name' => 'Product Edit',
        'url' => 'be_pages_ecom_product_edit.php',
        'icon' => 'fa fa-grip-horizontal'
    ),
);