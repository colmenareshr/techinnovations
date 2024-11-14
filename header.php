<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
  <!-- Logo -->
  <div class="text-xl font-semibold text-gray-800">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gray-600">
      Tech Innovations
    </a>
  </div>

  <!-- Botão de menu para dispositivos móveis -->
  <button id="mobile-menu-btn" class="md:hidden text-gray-800 focus:outline-none">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
  </button>

  <!-- Navegação - Escondida em mobile, visível em desktop -->
  <nav class="hidden md:flex space-x-6">
    
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '<ul class="flex flex-row space-x-6">%3$s</ul>',
        'add_li_class' => 'inline-block text-gray-600 hover:text-gray-800 text-center py-2 px-4',
      ]);
    ?>
  </nav>

  <!-- Botões para iniciar o projeto e perfil -->
  <div class="hidden md:flex items-center space-x-4">
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contato'))); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Iniciar Projeto</a>
</div>
</header>

<!-- Menú mobile -->
<nav id="mobile-menu" class="hidden md:hidden">
  <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
      'items_wrap' => '<ul class="px-3 my-3 space-y-4">%3$s</ul>',
      'add_li_class' => 'block text-gray-600 hover:text-gray-800 text-center py-2',
    ]);
  ?>
</nav>
