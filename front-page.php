<?php
/* Template Name: Home Page */
get_header();
?>

<main class="py-1">
  <div class="max-w-7xl mx-auto">
    <!-- Hero Section -->
  <section class="bg-gray-100 mt-5 py-16 px-6 md:px-12 lg:flex lg:items-center lg:justify-evenly">
    <div class="text-center lg:text-left lg:max-w-lg">
      <h1 class="text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl">
        Especialistas em Fornecimento de Soluções de Software Personalizadas
      </h1>
      <p class="mt-4 text-gray-600">Adaptado para suas necessidades únicas</p>
      <a href="#" class="mt-6 inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
        Saiba Mais
      </a>
    </div>
    <div class="mt-8 lg:mt-0 lg:ml-8">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-developer1.jpg" alt="Imagem de Especialista" class="w-full max-w-md lg:max-w-lg rounded-lg shadow-lg mx-auto lg:mx-0">
    </div>
  </section>

<!-- Seção de Serviços -->
<section class="py-16 px-6 md:px-12">
  <div class="max-w-4xl m-auto text-center">
    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl">Bem-vindo aos Nossos Serviços de Desenvolvimento de Software Personalizado</h2>
    <p class="mt-2 text-gray-600">Oferecemos soluções completas para dar vida às suas ideias.</p>
  </div>
  <div class="mt-10 grid gap-8 md:grid-cols-3">
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
      <h3 class="text-lg font-semibold text-gray-800">Soluções Inovadoras</h3>
      <p class="text-gray-600 mt-2">Tecnologias de ponta e metodologias para impulsionar a inovação.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
      <h3 class="text-lg font-semibold text-gray-800">Desenvolvedores Experientes</h3>
      <p class="text-gray-600 mt-2">Equipe dedicada a construir software de alta qualidade.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
      <h3 class="text-lg font-semibold text-gray-800">Suporte Contínuo</h3>
      <p class="text-gray-600 mt-2">Oferecemos manutenção e suporte contínuos para todos os nossos produtos.</p>
    </div>
  </div>
</section>

<!-- Seção de Projetos -->
<section class="py-16 px-6 md:px-12 bg-gray-100">
  <div class="text-center">
    <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Nossos Projetos</h2>
    <p class="mt-2 text-gray-600">Confira alguns dos nossos projetos recentes</p>
  </div>
  <div class="mt-10 grid gap-8 md:grid-cols-3">
    <?php
      // Configuración de la consulta para obtener posts de la categoría "projetos"
      $args = array(
        'category_name' => 'projetos', // Slug de la categoría "projetos"
        'posts_per_page' => 3, // Número de posts a mostrar
      );
      $projetos_query = new WP_Query($args);

      // Loop de WordPress
      if ($projetos_query->have_posts()) :
        while ($projetos_query->have_posts()) : $projetos_query->the_post();
    ?>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <a href="<?php the_permalink(); ?>">
              <!-- Imagen destacada -->
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover rounded-md mb-4">
              <?php endif; ?>

              <!-- Título del post -->
              <h3 class="text-lg font-semibold text-gray-800"><?php the_title(); ?></h3>

              <!-- Extracto del post -->
              <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
            </a>
            <!-- Botón de Leer Más -->
            <a href="<?php the_permalink(); ?>" class="mt-4 inline-block text-blue-600 font-semibold hover:text-blue-700">
              Leia mais
            </a>
          </div>
    <?php
        endwhile;
        wp_reset_postdata();
      else :
    ?>
        <p class="text-center text-gray-600">Nenhum projeto encontrado.</p>
    <?php endif; ?>
  </div>
</section>

<!-- Seção de Avaliações -->
<section class="py-16  px-6 md:px-12">
  <div class="text-center">
    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl">O que nossos clientes dizem</h2>
  </div>
  <div class="mt-10 grid gap-8 md:grid-cols-3">
    <div class="bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-600">“A equipe da Tech Innovations superou nossas expectativas com seu profissionalismo e abordagem orientada a resultados.”</p>
      <div class="mt-4 flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client1.jpg" alt="Alice Johnson" class="w-10 h-10 rounded-full mr-4">
        <div>
          <h4 class="text-gray-800 font-semibold">Alice Johnson</h4>
          <p class="text-gray-500 text-sm">Jan 12, 2021</p>
        </div>
      </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-600">“Trabalhar com a Tech Innovations foi um divisor de águas para o nosso negócio. Altamente recomendado!”</p>
      <div class="mt-4 flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client2.jpg" alt="David Smith" class="w-10 h-10 rounded-full mr-4">
        <div>
          <h4 class="text-gray-800 font-semibold">David Smith</h4>
          <p class="text-gray-500 text-sm">Aug 24, 2021</p>
        </div>
      </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-600">“Impressionada com a qualidade e a dedicação da equipe da Tech Innovations. Eles realmente se importam com os clientes.”</p>
      <div class="mt-4 flex items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client3.jpg" alt="Emily Davis" class="w-10 h-10 rounded-full mr-4">
        <div>
          <h4 class="text-gray-800 font-semibold">Emily Davis</h4>
          <p class="text-gray-500 text-sm">Dec 05, 2021</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Seção de Newsletter -->
    <section class="py-16 bg-gray-100 px-6 md:px-12 text-center">
      <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Vamos Construir Seu Próximo Projeto</h2>
      <form class="mt-6 max-w-md mx-auto flex items-center">
        <input type="email" placeholder="Seu e-mail" class="w-full border rounded-l px-4 py-2 focus:outline-none">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-r hover:bg-blue-700">Iniciar</button>
      </form>
    </section>
  </div>
</main>


<?php get_footer(); ?>
