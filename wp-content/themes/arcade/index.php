<?php get_header(); ?>
<?php
// Check value exists.
if( have_rows('flexible_content') ):

    // Loop through rows.
    while ( have_rows('flexible_content') ) : the_row();

        // Case: WYSIWYG Editor layout.
        if( get_row_layout() == 'wysiwyg_editor_layout' ):?>
            <div class="editor-layout content-wrapper"> 
                <?php the_sub_field('editor'); ?>
            </div>
        <?php
        // Case: Quote layout.
        elseif( get_row_layout() == 'quote_layout' ): ?>
            <div class="quote-layout content-wrapper">
                <h1><?php the_sub_field('header');?></h1>
                <em>"<?php the_sub_field('quote');?>"</em>
                <h3>-<?php the_sub_field('author');?></h3>
            </div>
        <?php
        // Case: Quote layout.
        elseif( get_row_layout() == 'about_layout' ): ?>
            <div class="about-layout content-wrapper">
                <div class="about-item">
                    <h1><?php the_sub_field('main_text');?></h1>
                </div>
                <div class="about-item">
                    <h1><span><?php the_sub_field('worker_amont');?></span> Employees</h1>
                    <h1><span><?php the_sub_field('years_in_business');?></span> Years in business</h1>
                </div>
            </div>
        
        <?php
        // Case: Full width image layout.
        elseif( get_row_layout() == 'full_width_image_layout' ): ?>
            <div style="background-image: url(<?php the_sub_field('image'); ?>);" class="full-width-layout">
                <div class="content-wrapper"></div>
            </div>
        
        <?php
        // Case: Image w/two text sections to the right layout.
        elseif( get_row_layout() == 'image_text_layout' ): ?>
            <div class="image-text-layout content-wrapper">
                <div class="image-text-item image" style="background-image: url(<?php the_sub_field('image'); ?>);" ></div>
                <div class="image-text-item" style="height: auto;">
                    <p><?php the_sub_field('center_text');?></p>
                </div>
                <div class="image-text-item" style="height: auto;">
                    <p><?php the_sub_field('right_text');?></p>
                </div>
            </div>
        
        <?php
        // Case: Two 50% width images layout
        elseif( get_row_layout() == 'two_images_layout' ): ?>
            <div class="two-image-layout">
                <div class="two-image-item" style="background-image: url(<?php the_sub_field('left_image'); ?>);" ><span>1</span></div>
                <div class="two-image-item" style="background-image: url(<?php the_sub_field('right_image'); ?>);" ><span>2</span></div>
            </div>
        
        <?php

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
<?php get_footer(); ?>