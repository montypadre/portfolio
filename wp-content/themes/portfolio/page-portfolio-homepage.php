<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="hero wrapper hero__wrapper">
            <div class="hero__text">
                <h1><?php echo esc_html(get_field('hero_title')); ?></h1>
                <?php the_field('hero_text'); ?>
            </div>
            <div class="hero__image">
                <?php
                $image = get_field('hero_image');
                if (!empty($image)): ?>
                    <img src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>"
                        width="<?php echo esc_attr($image['width']); ?>"
                        height="<?php echo esc_attr($image['height']); ?>" />
                <?php endif; ?>
            </div>
        </section>
        <?php
        $projects = get_field('projects');
        if ($projects): ?>
            <section class="projects wrapper section-grid">
                <h2><?php echo esc_html(get_field('projects_title')); ?></h2>
                <?php foreach ($projects as $post):
                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <div class="projects__item">
                        <a href="<?php echo esc_attr(get_field('project_link')); ?>" target="_blank">
                            <?php
                            $projectImage = get_field('project_image');
                            if (!empty($projectImage)): ?>
                                <img class="projects__image" src="<?php echo esc_url($projectImage['url']); ?>"
                                    alt="<?php echo esc_attr($projectImage['alt']); ?>"
                                    width="<?php echo esc_attr($projectImage['width']); ?>"
                                    height="<?php echo esc_attr($projectImage['height']); ?>" />
                            <?php endif; ?>
                        </a>
                        <div class="projects__text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            </section>
        <?php endif; ?>
        <section class="stack wrapper stack__wrapper section-grid">
            <h2><?php echo esc_html(get_field('stack_title')); ?></h2>
            <div class="stack__icons">
                <div class="stack__icon">
                    <?php
                    $image = get_field('stack_image_1');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']); ?>"
                            height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="stack__icon">
                    <?php
                    $image = get_field('stack_image_2');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']); ?>"
                            height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="stack__icon">
                    <?php
                    $image = get_field('stack_image_3');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']); ?>"
                            height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="stack__icon">
                    <?php
                    $image = get_field('stack_image_4');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']); ?>"
                            height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="stack__icon">
                    <?php
                    $image = get_field('stack_image_5');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']); ?>"
                            height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="stack__icon">
                    <?php
                    $image = get_field('stack_image_6');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']); ?>"
                            height="<?php echo esc_attr($image['height']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
        $contactLinks = get_field('contact_links');
        if ($contactLinks): ?>
            <section class="contact wrapper section-grid">
                <h2><?php echo esc_html(get_field('contact_title')); ?></h2>
                <ul class="contact__links">
                    <?php foreach ($contactLinks as $post):
                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        <?php
                        if (get_field('link_type') == 'Email Link') {
                            $link = esc_url('mailto:' . get_field('contact_email'));
                        } elseif (get_field('link_type') == 'Website Link') {
                            $link = esc_attr(get_field('contact_url'));
                        }
                        ?>
                        <li class="contact__item">
                            <a href="<?php echo $link; ?>" class="contact__link">

                                <?php
                                $image = get_field('contact_icon');
                                if (!empty($image)): ?>
                                    <img class="contact__icon style-svg" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <?php echo esc_html(get_field('contact_text')); ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                    <?php
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                </ul>
            </section>

        <?php endif; ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>