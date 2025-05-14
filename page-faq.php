<?php get_header();?>
<section class="orange relative h-64 md:mb-44 mb-20">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h1 class="text-center lg:text-3xl text-2xl text-slate-100">Ofte stillede spørgsmål</h1>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>

<div class="grid xl:grid-cols-12 grid-cols-1 items-top">
  <div class="col-span-3 pl-5 hidden xl:block">
    <img class="h-3/4 rounded-3xl" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/faq.webp" alt="kager">
  </div>
  <div class="px-5 col-span-9">
    <div class="container mx-auto rounded-3xl xl:h-[700px]">
      <?php if (have_rows('faq')) : ?>
        <div class="faq-accordion">
          <?php while (have_rows('faq')) : the_row(); ?>
            <div class="faq-item mb-2">
              <button class="faq-question">
                <span class="faq-text"><?php the_sub_field('question'); ?></span>
                <span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
                <p><?php the_sub_field('answer'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

</div>










<?php get_footer(); ?>