<?php
// Função para enfileirar os estilos
function tech_innovations_enqueue_scripts() {
  // Carregar Tailwind CSS e estilos do tema
  wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css', [], '1.0', 'all');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);

  // Carregar Material Icons
  wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], null);
}
add_action('wp_enqueue_scripts', 'tech_innovations_enqueue_scripts');


if (!function_exists('theme_setup')):
  function theme_setup() {
      // Adicione suporte para menus de navegação
      register_nav_menus(array(
          'primary' => __('Primary Menu', 'yourtheme'),
          'mobile' => __('Mobile Menu', 'yourtheme'),
          'footer' => __('Footer Menu', 'yourtheme')
      ));
  }
endif;
add_action('after_setup_theme', 'theme_setup');

function tech_innovations_images() {
  // Habilitar imágenes destacadas
  add_theme_support( 'post-thumbnails' );

  // Crear tamaños personalizados
  add_image_size( 'destacada-principal', 800, 600, true );
  add_image_size( 'destacada-listado', 300, 200, true );

  // Agregar título a la imagen destacada
  add_post_type_support( 'post', 'title-tag' );
}
add_action( 'after_setup_theme', 'tech_innovations_images' );