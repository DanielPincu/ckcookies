<section class="hidden xl:block container mx-auto">
    <h3 class="hidden md:block text-center text-red-950 lg:pt-44 pt-20 pb-10 lg:text-4xl text-2xl">Vores butiksgalleri</h3>

    <div class="hidden md:grid xl:grid-cols-11 h-[600px] gap-2 mt-10 px-10 xl:px-0">
        <!-- Column 1: Gallery Image and Background Colors -->
        <div class="col-span-4">
            <div class="grid h-full gap-2">
               
                <div class="col-span-2 h-full w-full relative">
                    <img class="h-full w-full object-cover absolute inset-0" 
                         src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                         alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
                </div>

                
                <div class="col-span-1 h-full relative">
                    <img class="h-full w-full object-cover absolute inset-0" 
                         src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                         alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
                </div>

                
                <div class="col-span-1 h-full relative">
                    <img class="h-full w-full object-cover absolute inset-0" 
                         src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                         alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
                </div>
            </div>
        </div>

        
        <div class="hidden xl:block col-span-3 h-full relative">
            <img class="h-full w-full object-cover absolute inset-0" 
                 src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                 alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
        </div>

        
        <div class="col-span-4">
            <div class="grid h-full gap-2">
               
                <div class="col-span-1 h-full relative">
                    <img class="h-full w-full object-cover absolute inset-0" 
                         src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                         alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
                </div>

                
                <div class="col-span-1 h-full relative">
                    <img class="h-full w-full object-cover absolute inset-0" 
                         src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                         alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
                </div>

                
                <div class=" col-span-2 h-full relative">
                    <img class="h-full w-full object-cover absolute inset-0" 
                         src="<?php echo esc_url(get_field('gallery_image_1')['sizes']['large']); ?>" 
                         alt="<?php echo esc_attr(get_field('gallery_image_1')['alt']); ?>">
                </div>
            </div>
        </div>
    </div>
</section>