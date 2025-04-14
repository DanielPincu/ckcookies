<?php get_header();?>
<section class="orange relative h-64 mb-44 ">
    <div class="relative z-10 container mx-auto pt-20 xl:py-32 px-10">
        <h3 class="text-center lg:text-3xl text-2xl text-slate-100">Velkommen til vores butik</h3>
    </div>

    <div class="z-10 absolute -bottom-5 lg:-bottom-14">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/wave.webp" alt="bølge" class="">
    </div>
</section>


<div class="container mx-auto mt-32 rounded-3xl h-[400px]">
<?php if (have_rows('faq')) : ?>
  <div class="faq-accordion">
    <?php while (have_rows('faq')) : the_row(); ?>
      <div class="faq-item">
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









<?php get_footer(); ?>