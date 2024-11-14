<?php
/* Template Name: Página de Serviços */
get_header();
?>

<main class="py-1">
  <div class="max-w-full mx-auto">
    <!-- Hero Section -->
    <section class="bg-gray-50 py-16 px-6 md:px-12 lg:flex lg:items-center lg:justify-between">
      <div class="text-center lg:text-left lg:max-w-lg">
        <h1 class="text-4xl font-bold text-gray-800 md:text-4xl lg:text-5xl">
          Nossos Serviços de Desenvolvimento de Software
        </h1>
        <p class="mt-4 text-gray-600">Soluções personalizadas para impulsionar seu negócio</p>
        <a href="#contato" class="mt-6 inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
          Solicite um Orçamento
        </a>
      </div>
      <div class="mt-8 lg:mt-0 lg:ml-8">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-bg.jpg" alt="Serviços de Desenvolvimento" class="w-full max-w-md lg:max-w-lg rounded-lg shadow-lg mx-auto lg:mx-0">
      </div>
    </section>

    <!-- Seção de Serviços Detalhados -->
    <section class="py-16 px-6 md:px-12">
  <div class="text-center">
    <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Nossos Serviços Especializados</h2>
    <p class="mt-2 text-gray-600">Oferecemos uma gama completa de soluções de desenvolvimento de software</p>
  </div>
  <div class="mt-10 grid gap-8 md:grid-cols-3">
    <?php
    $args = array(
      'post_type' => 'servico',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    );

    $servicos_query = new WP_Query($args);

    if ($servicos_query->have_posts()) :
      while ($servicos_query->have_posts()) : $servicos_query->the_post();
        // Usando ACF para obtener los campos personalizados
        $icone = get_field('icone');
        $descricao_curta = get_field('descricao_curta');

        // Verifica si el ícono es un array y obtiene la URL
        $icone_url = is_array($icone) && isset($icone['url']) ? $icone['url'] : '';
    ?>
      <a href="<?php the_permalink(); ?>" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center mb-4">
          <?php if ($icone_url) : ?>
            <img src="<?php echo esc_url($icone_url); ?>" alt="<?php the_title(); ?>" class="w-12 h-12 mr-3">
          <?php endif; ?>
          <h3 class="text-lg font-semibold text-gray-800"><?php the_title(); ?></h3>
        </div>
        <?php if ($descricao_curta) : ?>
          <p class="text-gray-600"><?php echo esc_html($descricao_curta); ?></p>
        <?php endif; ?>
      </a>
    <?php
      endwhile;
      wp_reset_postdata();
    else :
    ?>
      <p class="col-span-3 text-center text-gray-600">Nenhum serviço encontrado.</p>
    <?php endif; ?>
  </div>
</section>




    <!-- Seção de Processo de Desenvolvimento -->
<section class="py-16 bg-gray-50 px-6 md:px-12">
  <div class="text-center">
    <h2 class="text-4xl font-bold text-gray-800">Nosso Processo de Desenvolvimento</h2>
    <p class="mt-2 text-gray-600">Uma abordagem estruturada para entregar soluções de alta qualidade</p>
  </div>
  <div class="max-w-4xl m-auto mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-2">
    <?php
    $processos = array(
      array(
        'titulo' => 'Análise de Requisitos',
        'descricao' => 'Compreendemos suas necessidades e definimos os objetivos do projeto.',
        'icone' => 'assignment'
      ),
      array(
        'titulo' => 'Design e Planejamento',
        'descricao' => 'Criamos protótipos e planejamos a arquitetura do sistema.',
        'icone' => 'design_services'
      ),
      array(
        'titulo' => 'Desenvolvimento',
        'descricao' => 'Codificamos a solução usando as melhores práticas e tecnologias.',
        'icone' => 'code'
      ),
      array(
        'titulo' => 'Testes e Lançamento',
        'descricao' => 'Realizamos testes rigorosos e lançamos seu produto com confiança.',
        'icone' => 'rocket_launch'
      )
    );

    foreach ($processos as $processo) :
    ?>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <span class="material-icons text-blue-600 text-3xl mr-3"><?php echo esc_html($processo['icone']); ?></span>
          <h3 class="text-lg font-semibold text-gray-800"><?php echo esc_html($processo['titulo']); ?></h3>
        </div>
        <p class="text-gray-600"><?php echo esc_html($processo['descricao']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

    <!-- Seção de Tecnologias -->
<section class="py-16 px-6 md:px-12">
  <div class="text-center">
    <h2 class="text-2xl font-bold text-gray-800">Tecnologias que Utilizamos</h2>
    <p class="mt-2 text-gray-600">Trabalhamos com as mais recentes tecnologias para oferecer as melhores soluções</p>
  </div>
  <div class="mt-10 flex flex-wrap justify-center items-center gap-8">
    <?php
    $tecnologias = array(
      array('nome' => 'React', 'arquivo' => 'React-icon.svg'),
      array('nome' => 'Node.js', 'arquivo' => 'node-js-icon.svg'),
      array('nome' => 'Next JS', 'arquivo' => 'nextjs-icon.svg'),
      array('nome' => 'Python', 'arquivo' => 'python-icon.svg'),
      array('nome' => 'Docker', 'arquivo' => 'docker.svg'),
      array('nome' => 'AWS', 'arquivo' => 'aws.svg'),
      // Adicionar mais tecnologias conforme necessário
    );

    foreach ($tecnologias as $tech) :
    ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $tech['arquivo']; ?>" alt="<?php echo $tech['nome']; ?>" class="h-16 w-auto object-contain">
    <?php endforeach; ?>
  </div>
</section>

    <!-- Seção de Contato -->
    <section id="contato" class="max-w-4xl m-auto py-16 bg-gray-50 px-6 md:px-12 shadow-md">
      <div class="text-center py-2">
        <h2 class="text-4xl font-bold text-gray-800">Entre em Contato</h2>
        <p class="mt-2 text-gray-600">Estamos prontos para discutir seu próximo projeto</p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="1b81568" title="Contact Page"]'); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>