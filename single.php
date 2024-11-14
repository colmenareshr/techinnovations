<?php get_header(); ?>

<main class="py-12 px-4 lg:px-8">
  <div class="max-w-7xl mx-auto">

    <!-- Hero Section -->
<section class="bg-gray-100 py-16 px-6 md:px-12 lg:flex lg:items-center lg:justify-between">
  <!-- Title and Metadata -->
  <div class="lg:w-1/2 text-center lg:text-left lg:max-w-lg">
    <h1 class="text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl">
      <?php the_title(); ?>
    </h1>
    <p class="mt-4 text-gray-500 text-sm">
      <?php echo get_the_date(); ?> - Por <?php the_author(); ?>
    </p>
  </div>

  <!-- Featured Image -->
  <?php if (has_post_thumbnail()) : ?>
    <div class="mt-8 lg:mt-0 lg:w-1/2 flex justify-center lg:justify-end">
      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full max-w-md lg:max-w-lg rounded-lg shadow-lg">
    </div>
  <?php endif; ?>
</section>


    <!-- Post Content -->
    <section class="prose prose-lg max-w-5xl m-auto py-16 text-gray-700">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </section>

    <!-- Categories and Tags Section -->
    <section class="mt-8 flex flex-wrap gap-4 text-sm">
      <div class="text-gray-600">
        <strong>Categorias:</strong> <?php the_category(', '); ?>
      </div>
      <div class="text-gray-600">
        <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
      </div>
    </section>

    <!-- Post Navigation Section -->
    <section class="mt-12 flex justify-between border-t border-gray-300 pt-6">
      <div>
        <?php previous_post_link('%link', '← Post Anterior', true); ?>
      </div>
      <div>
        <?php next_post_link('%link', 'Próximo Post →', true); ?>
      </div>
    </section>

    <!-- Related Posts Section -->
    <section class="py-16">
      <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-800">Posts Relacionados</h2>
        <p class="mt-2 text-gray-600">Explore mais conteúdo sobre este assunto</p>
      </div>
      <div class="mt-10 grid gap-8 md:grid-cols-3">
        <?php
        // Query for Related Posts by Category
        $related_args = array(
          'category__in' => wp_get_post_categories(get_the_ID()),
          'post__not_in' => array(get_the_ID()),
          'posts_per_page' => 3,
          'orderby' => 'rand'
        );
        $related_posts = new WP_Query($related_args);

        if ($related_posts->have_posts()) :
          while ($related_posts->have_posts()) : $related_posts->the_post();
        ?>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover rounded-md mb-4">
              <?php endif; ?>
              <h3 class="text-lg font-semibold text-gray-800"><?php the_title(); ?></h3>
              <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
            </a>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
        ?>
          <p class="text-center text-gray-600">Nenhum post relacionado encontrado.</p>
        <?php endif; ?>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>
