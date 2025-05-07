<footer class="relative orange flex flex-col items-center justify-center mt-44">

<?php
$frontpage_id = get_option('page_on_front');
$address = get_field('address', $frontpage_id);
$phone_1 = get_field('phone_1', $frontpage_id);
$phone_2 = get_field('phone_2', $frontpage_id);
$email = get_field('email', $frontpage_id);
?>


    <!-- Wave Image -->
    <div class="z-10 absolute -top-5 lg:-top-14 rotate-180">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/wave.webp" alt="bølge">
    </div>

    <!-- Main Footer Grid -->
    <div class="w-full py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 px-4 text-center">
            
            <!-- Logo + Slogan -->
            <div class="flex flex-col items-center justify-center">
                <div class="w-32 mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/cklogo.webp'); ?>" alt="om os"> 
                </div>
                <h3 class="text-xl text-slate-100 text-center mb-2">Drys, Smil & En Hel Del Sukker!</h3>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/yourprofile" target="_blank" class="text-slate-100 hover:text-blue-500">
                        <i class="fa-brands fa-facebook text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/yourprofile" target="_blank" class="text-slate-100 hover:text-pink-500">
                        <i class="fa-brands fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>

            <!-- Kontakt os -->
            <div class="text-left mx-auto">
                <h3 class="mb-6 text-xl font-semibold text-slate-100 uppercase text-center">Kontakt os</h3>
                <ul class="text-slate-100 font-medium">
                    <li class="mb-4 flex items-center">
                        <i class="fas fa-map-marker-alt text-lg mr-2"></i>
                        <span> <?php echo esc_html($address); ?></span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <i class="fas fa-phone-volume text-lg mr-2"></i>
                        <span><?php echo esc_html($phone_1); ?></span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <i class="fas fa-phone-volume text-lg mr-2"></i>
                        <span><?php echo esc_html($phone_2); ?></span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <i class="fas fa-envelope text-lg mr-2"></i>
                        <a href="mailto:<?php echo esc_html($email); ?>" class="hover:underline"><?php echo esc_html($email); ?></a>
                    </li>
                </ul>
            </div>

            <!-- Shop -->
            <div class="text-left mx-auto xl:pl-20">
                <h3 class="mb-6 text-xl font-semibold text-slate-100 uppercase text-start">Shop</h3>

                <ul class="text-slate-100 font-medium">
                    <?php
                    $categories = get_terms([
                        'taxonomy'   => 'product_cat',
                        'hide_empty' => true,
                        'exclude'    => [
                            get_term_by('slug', 'anbefalet', 'product_cat')->term_id ?? 0,
                            get_term_by('slug', 'udvalgt', 'product_cat')->term_id ?? 0,
                        ],
                    ]);

                    foreach ( $categories as $category ) {
                        $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
                        $link = add_query_arg('product_cat', $category->slug, $shop_page_url);

                        echo '<li class="mb-5">
                            <a href="' . esc_url( $link ) . '" class="hover:underline">' . esc_html( $category->name ) . '</a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>

            <!-- Nyttige Links -->
            <div class="text-left mx-auto">
                <h3 class="mb-6 text-xl font-semibold text-slate-100 uppercase text-center">Nyttige links</h3>
                <ul class="text-slate-100 font-medium">
                    <li class="mb-5">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) ); ?>" class="hover:underline">Kontakt os</a>
                    </li>
                    <li class="mb-5">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'om-os' ) ) ); ?>" class="hover:underline">Om os</a>
                    </li>
                    <li class="mb-5">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'faq' ) ) ); ?>" class="hover:underline">FAQ</a>
                    </li>
                    <li class="mb-5">
                        <a href="<?php echo home_url(); ?>" class="hover:underline">Tak for besøget</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="w-full flex flex-col justify-center items-center py-2 bg-pink-500">
        <p class="text-slate-100 text-center text-sm flex items-center">© 2025 CKCakes&Cookies. All Rights Reserved.</p>
        <p class="text-slate-100  text-sm">Crafted by <a class="text-orange-300 hover:text-orange-400" href="https://www.linkedin.com/in/catalinavrinceanu/">Catalina Vrinceanu</a> & <a class="text-orange-300 hover:text-orange-400" href="https://www.linkedin.com/in/danielpincu/">Daniel Pincu</a></p>
        <!-- If you discover this by inspecting the code, you're awesome! Greetings from Kate & Daniel! -->
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
