<!-- contact-page.php -->
<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

<main class="bg-gray-50 py-12">
  <div class="max-w-7xl mx-auto py-5">
    <!-- Hero Section -->
  <section class="bg-gray-50 py-16 px-6 md:px-12 lg:flex lg:items-center lg:justify-evenly">
      <div class="text-center lg:text-left lg:max-w-lg">
        <h1 class="text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl">
          Entre em Contato
        </h1>
        <p class="mt-4 text-gray-600">Estamos aqui para ajudar. Entre em contato conosco através do formulário ou pelos meios de contato abaixo.</p>
      </div>
      <div class="mt-8 lg:mt-0 lg:ml-8">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-developer.jpg" alt="Imagem de Especialista" class="w-full max-w-md lg:max-w-lg rounded-lg shadow-lg mx-auto lg:mx-0">
      </div>
    </section>

  <!-- Contact Form Section with Contact Form 7 -->
  <section class="max-w-4xl mx-auto px-4 py-12">
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Envie-nos uma mensagem</h2>
      <?php echo do_shortcode('[contact-form-7 id="1b81568" title="Contact Page"]'); ?>
    </div>
  </section>

  <!-- Contact Information Section -->
  <section class="max-w-4xl mx-auto px-4 py-12">
    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row items-center md:space-x-8 text-center md:text-left md:justify-between md:p-10">
      <div class="mb-6 md:mb-0">
        <h3 class="text-xl font-semibold text-gray-800">Endereço</h3>
        <p class="text-gray-600">Rua Exemplo, 123<br>Centro, São Paulo - SP</p>
      </div>
      <div class="mb-6 md:mb-0">
        <h3 class="text-xl font-semibold text-gray-800">Telefone</h3>
        <p class="text-gray-600">(11) 1234-5678</p>
      </div>
      <div>
        <h3 class="text-xl font-semibold text-gray-800">Email</h3>
        <p class="text-gray-600">contato@empresa.com</p>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="max-w-4xl mx-auto px-4 pb-12">
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Nossa Localização</h2>
      <div class="w-full h-64 rounded-lg overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.218707892086!2d-122.0842494846821!3d37.42206597982686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb72c1d6a4b07%3A0xb9e5ec80e1b24f02!2sGoogleplex!5e0!3m2!1sen!2sus!4v1636771824920!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
  </div>
</main>
