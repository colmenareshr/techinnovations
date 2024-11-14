<?php
/* 
 * Template Name: Sobre Nós
 */
get_header();
?>

<!-- Página Sobre Nós -->
<main class="px-4 lg:px-8">
  <div class="max-w-7xl mx-auto py-5">
    
    <!-- Hero Section -->
<section class="bg-white py-16 lg:flex lg:items-center lg:justify-evenly">
  <div class="text-center lg:text-left lg:max-w-lg lg:p-10">
    <h1 class="text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl">
      Sobre Nós
    </h1>
    <p class="mt-4 text-gray-600">Bem-vindo ao nosso serviço de desenvolvimento de software personalizado, feito para atender todas as suas necessidades.</p>
  </div>
  <div class="mt-8 lg:mt-0 lg:ml-8 lg:p-10">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/consultora-software.jpg" alt="Imagem de Especialista" class="w-full max-w-md lg:max-w-lg rounded-lg shadow-lg mx-auto lg:mx-0">
  </div>
</section>


    <!-- Nossa História -->
    <section class="py-16">
      <div class="grid gap-8 lg:grid-cols-2 items-center">
        <div class="mt-8 lg:mt-0 lg:p-10">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-team.jpg" alt="Nossa História" class="w-full rounded-lg shadow-lg">
        </div>
        <div class="lg:p-10">
          <h2 class="text-4xl font-bold text-gray-800">Nossa História</h2>
          <p class="mt-4 text-gray-600">
            Fundada em 2020, nossa empresa tem se dedicado a fornecer soluções tecnológicas que se adaptam à evolução das necessidades do mercado. Com mais de 4 no setor, entregamos projetos de software de alta qualidade e estamos prontos para enfrentar novos desafios.
          </p>
          <ul class="mt-6 space-y-4">
            <li class="flex items-center text-gray-600">
              <span class="material-icons text-blue-500 mr-2">check_circle</span> Oferecemos revisão ilimitada.
            </li>
            <li class="flex items-center text-gray-600">
              <span class="material-icons text-blue-500 mr-2">check_circle</span> Mais de 1,235 clientes satisfeitos.
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Nossa Visão -->
    <section class="py-16 bg-gray-100 rounded-lg">
      <div class="grid gap-8 lg:grid-cols-2 items-center">
        <div class="order-2 lg:order-1 lg:p-10">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-developer.jpg" alt="Nossa Visão" class="w-full rounded-lg shadow-lg">
        </div>
        <div class="order-1 lg:order-2 lg:p-10">
          <h3 class="text-xl font-light uppercase text-gray-800">Nossa Visão</h3>
          <h2 class="text-4xl font-bold text-gray-800">Mantenha-se atualizado com as últimas tecnologias e tendências do setor</h2>
          <p class="mt-4 text-gray-600">
            Estamos sempre atualizados com as últimas tecnologias e tendências do mercado. Nosso objetivo é fornecer soluções que não apenas atendam às suas necessidades atuais, mas que também estejam preparadas para o futuro.
          </p>
          <ul class="mt-6 space-y-4">
            <li class="flex items-center text-gray-600">
              <span class="material-icons text-blue-500 mr-2">bug_report</span> Minimização de bugs.
            </li>
            <li class="flex items-center text-gray-600">
              <span class="material-icons text-blue-500 mr-2">code</span> Código limpo e organizado.
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Nossos Habilidades -->
    <section class="py-16">
      <h2 class="text-4xl font-bold text-gray-800 text-center">Nossas Habilidades e Experiência</h2>
      <div class="grid gap-8 mt-8 lg:grid-cols-2 lg:p-10 items-center">
        <div>
          <p class="text-gray-600">
            Nossa equipe é composta por especialistas em desenvolvimento de software personalizados, prontos para entregar projetos de alta qualidade que se adaptam às necessidades específicas de cada cliente.
          </p>
          <p class="mt-4 text-gray-600">
            Seja para software desktop ou soluções baseadas na web, garantimos uma abordagem sob medida que visa os melhores resultados.
          </p>
        </div>
        <div>
          <ul class="space-y-4">
            <li class="flex justify-between items-center">
              <span class="text-gray-600">Software Desktop</span>
              <div class="w-2/3 bg-gray-300 h-4 rounded-full overflow-hidden">
                <div class="bg-blue-600 h-full w-11/12"></div>
              </div>
              <span class="text-gray-600">95%</span>
            </li>
            <li class="flex justify-between items-center">
              <span class="text-gray-600">Software Web</span>
              <div class="w-2/3 bg-gray-300 h-4 rounded-full overflow-hidden">
                <div class="bg-blue-600 h-full w-11/12"></div>
              </div>
              <span class="text-gray-600">99%</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Nossa Equipe -->
    <section class="py-16 bg-gray-100 rounded-lg">
      <h2 class="text-4xl font-bold text-gray-800 text-center">Nossa Equipe</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6 md:p-10 mt-10">
  <!-- Card 1: Diretor de Tecnologia -->
  <div class="bg-white p-6 rounded-lg shadow-md text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-member1.jpg" alt="Lucas Silva" class="w-24 h-24 mx-auto object-cover rounded-full mb-4">
    <h3 class="text-lg font-semibold text-gray-800">Lucas Silva</h3>
    <p class="text-gray-600">Diretor de Tecnologia</p>
  </div>

  <!-- Card 2: Gerente de Produto -->
  <div class="bg-white p-6 rounded-lg shadow-md text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-member2.jpg" alt="Mariana Souza" class="w-24 h-24 mx-auto object-cover rounded-full mb-4">
    <h3 class="text-lg font-semibold text-gray-800">Mariana Souza</h3>
    <p class="text-gray-600">Gerente de Produto</p>
  </div>

  <!-- Card 3: Engenheiro de Software Sênior -->
  <div class="bg-white p-6 rounded-lg shadow-md text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-member3.jpg" alt="Carlos Oliveira" class="w-24 h-24 mx-auto object-cover rounded-full mb-4">
    <h3 class="text-lg font-semibold text-gray-800">Carlos Oliveira</h3>
    <p class="text-gray-600">Engenheiro de Software Sênior</p>
  </div>
</div>

    </section>

    <!-- CTA - Contato -->
    <section class="py-16 text-center bg-blue-600 text-white rounded-lg mt-8">
      <h2 class="text-4xl font-bold">Pronto para Conversar?</h2>
      <p class="mt-4 max-w-2xl mx-auto">
        Estamos prontos para transformar suas ideias em realidade. Entre em contato conosco para uma consulta e saiba como podemos ajudar.
      </p>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contato'))); ?>" class="mt-6 inline-block bg-white text-blue-600 font-semibold py-3 px-6 rounded-lg hover:bg-gray-200 transition duration-200">
        Fale Conosco
      </a>
    </section>
    
  </div>
</main>

<?php get_footer(); ?>
