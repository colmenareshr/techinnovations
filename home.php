<?php
/* Template Name: Blog Page */
get_header();
?>

<main class="py-1">
  <div class="max-w-7xl mx-auto">

    <!-- Hero Section -->
    <section class="bg-gray-100 mt-5 py-16 px-6 md:px-12 text-center">
      <h1 class="text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl">Nosso Blog</h1>
      <p class="mt-4 text-gray-600">Acompanhe as últimas novidades, dicas e artigos sobre desenvolvimento de software.</p>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-16 px-6 md:px-12">
      <div class="text-center max-w-4xl m-auto">
        <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">Últimos Artigos</h2>
        <p class="mt-2 text-gray-600">Confira as publicações mais recentes da nossa equipe.</p>
      </div>

      <div class="mt-10 grid gap-8 md:grid-cols-3">
        <?php
        // Configurando o loop do WordPress para obter as postagens do blog
        $blog_posts = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 6,
        ));

        if ($blog_posts->have_posts()) :
          while ($blog_posts->have_posts()) : $blog_posts->the_post();
        ?>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <a href="<?php the_permalink(); ?>">
              <!-- Imagen destacada del post -->
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover rounded-md mb-4">
              <?php endif; ?>

              <!-- Título da postagem -->
              <h3 class="text-lg font-semibold text-gray-800"><?php the_title(); ?></h3>

              <!-- Trecho da postagem -->
              <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </a>

            <!-- Botão Leia mais -->
            <a href="<?php the_permalink(); ?>" class="mt-4 inline-block text-blue-600 font-semibold hover:text-blue-700">
              Leia mais
            </a>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
        ?>
          <p class="text-center text-gray-600">Nenhum artigo encontrado.</p>
        <?php endif; ?>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
