<?php

/*Template Name: Stores */

get_header(); ?>


<h1 class="store-title"><?php the_title(); ?></h1>

<div class="stores">

        <?php if(have_rows('stores')):?>


            <?php
            while( have_rows('stores')): the_row();

            $store_name = get_sub_field('store_name');
            $phone_number = get_sub_field('phone_number');
            $address = get_sub_field('address');
            $opening_hours = get_sub_field('opening_hours');
            ?>

            <div class="store-container">

              <p class="store-name"><?php echo $store_name;?></p>  
               <p class="store-number"><?php echo $phone_number;?></p> 
              <p class="store-address"><?php echo $address;?></p>  
              <p class="store-hours"><?php echo $opening_hours;?></p>  
            
        </div>

            <?php endwhile;?>


        <?php endif;?>




<divl>


<?php

get_footer();
