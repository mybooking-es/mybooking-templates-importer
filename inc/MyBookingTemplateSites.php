<?php
/*
*  Mybooking Demos
*  ---------------
*/

function mybookingTemplatesImporter_import_files() {
  return array(
    array(
      'import_file_name'             => 'rentacar', // The name of the site template
      'categories'                   => array( 'Rentacar' ), // Category tab where you want to show
      'local_import_file'            => trailingslashit(plugin_dir_path( __DIR__ ) ).'templates/rentacar/content.xml', // Content file URL
      'local_import_widget_file'     => trailingslashit(plugin_dir_path( __DIR__ ) ).'templates/rentacar/widgets.json', // Widgets file URL
      'local_import_customizer_file' => trailingslashit(plugin_dir_path( __DIR__ ) ).'templates/rentacar/customizer.dat', // Customizer settings file URL
      'import_preview_image_url'     => plugin_dir_url(__DIR__).'templates/rentacar/preview.png', // Preview image URL
      'import_notice'                => __( 'Rent a car', 'mybooking-templates-importer' ), // Message shown before start importing
      'preview_url'                  => 'https://pro-rentacar.mybookingcloud.com' // Demo URL
    )
  );
}
add_filter( 'mybooking-templates-importer/import_files', 'mybookingTemplatesImporter_import_files' );

function mybookingTemplatesImporter_after_import_setup() {

  // Assign menus to their locations.
  $main_menu = get_term_by( 'name', 'Menú principal', 'nav_menu' );
  set_theme_mod( 'nav_menu_locations', array(
      'primary' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    )
  );

  // Assign front page and posts page (blog page).
  $front_page_id = get_page_by_title( 'Inicio' );
  //$blog_page_id  = get_page_by_title( 'Blog' );

  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  //update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'mybooking-templates-importer/after_import', 'mybookingTemplatesImporter_after_import_setup' );