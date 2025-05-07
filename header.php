<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >



<!-- News Ticker -->
<?php
$frontpage_id = get_option('page_on_front');
if (have_rows('ticker_items', $frontpage_id)) : ?>
  <div class="ticker-wrapper">
    <div class="ticker">
      <?php while (have_rows('ticker_items', $frontpage_id)) : the_row(); ?>
        <span>🍪</span> <?php echo esc_html(get_sub_field('item_text')); ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>



<!-- Navigation -->
<header id="header" class="orange sticky top-0 z-50">
  <div class="bg-[#F7E4B6] container mx-auto rounded-3xl px-4 lg:px-20 z-50 relative">
    <div class="container mx-auto flex justify-between items-center px-4">
      
    
      
      <!-- Desktop Navigation -->
    <nav class="hidden lg:flex md:flex-row">
      <ul class="flex lg:space-x-14 md:space-x-6">
        <li>
          <a href="<?php echo home_url(); ?>" 
            class="hover:text-orange-500 <?php echo is_front_page() ? 'text-orange-500' : 'text-amber-950'; ?> transition duration-300 font-bold">
            Hjem
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'om-os' ) ) ); ?>" 
            class="hover:text-orange-500 <?php echo is_page('om-os') ? 'text-orange-500' : 'text-amber-950'; ?> transition duration-300 font-bold">
            Om os
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" 
            class="hover:text-orange-500 <?php echo is_shop() ? 'text-orange-500' : 'text-amber-950'; ?> transition duration-300 font-bold">
            Shop
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) ); ?>" 
            class="hover:text-orange-500 <?php echo is_page('kontakt') ? 'text-orange-500' : 'text-amber-950'; ?> transition duration-300 font-bold">
            Kontakt os
          </a>
        </li>
      </ul>
    </nav>


      <!-- Logo Section -->
      <div class="lg:pr-44 md:pr-0 py-2">
        <a class="" href="<?php echo home_url(); ?>">
          <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/cklogo.webp" alt="hjemmesidens logo" class="w-10 md:w-24">
        </a>
      </div>

      <!-- Cart and Account Links -->
      <div class="flex space-x-4 sm:space-x-6 pl-10">
  <!-- Cart Link -->
  <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'cart' ) ) ); ?>" 
     class="flex cursor-pointer flex-col items-center justify-center 
     <?php echo is_cart() ? 'text-orange-500 scale-110' : 'text-red-950'; ?> transition duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
      <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd"/>
    </svg>
    <span class="text-xs font-bold">Kurv</span>
  </a>

  <!-- Account Link -->
  <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>" 
     class="relative flex cursor-pointer flex-col items-center justify-center 
     <?php echo is_account_page() ? 'text-orange-500 scale-110' : 'text-red-950'; ?> transition duration-300">
    <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
      <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
      <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
    </span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
    </svg>
    <span class="text-xs font-bold">Konto</span>
  </a>
</div>


      <!-- Mobile Navigation Button -->
      <div class="lg:hidden z-10 pl-5">
      <button id="cookie-menu" class="hamburger-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>

      </div>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="fixed top-0 right-0 bg-amber-50 w-64 h-full p-6 flex flex-col space-y-4 text-pink-800 transform translate-x-full transition-transform duration-300 ease-in-out z-50 shadow-lg rounded-l-lg">
  <div class="flex justify-start">
    <button id="close-menu" class="text-pink-600 text-3xl">&times;</button>
  </div>
  <ul class="space-y-6">
    <li>
      <a href="<?php echo home_url(); ?>" 
        class="text-xl font-semibold transition duration-300 hover:text-orange-500 
        <?php echo is_front_page() ? 'text-orange-500' : 'text-amber-950'; ?>">
        Hjem
      </a>
    </li>
    <li>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'om-os' ) ) ); ?>" 
        class="text-xl font-semibold transition duration-300 hover:text-orange-500 
        <?php echo is_page('om-os') ? 'text-orange-500' : 'text-amber-950'; ?>">
        Om os
      </a>
    </li>
    <li>
      <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" 
        class="text-xl font-semibold transition duration-300 hover:text-orange-500 
        <?php echo is_shop() ? 'text-orange-500' : 'text-amber-950'; ?>">
        Shop
      </a>
    </li>
    <li>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) ); ?>" 
        class="text-xl font-semibold transition duration-300 hover:text-orange-500 
        <?php echo is_page('kontakt') ? 'text-orange-500' : 'text-amber-950'; ?>">
        Kontakt os
      </a>
    </li>
  </ul>
</nav>

<!-- Overlay to close menu when clicking outside -->
<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-30"></div>

  </div>
</header>