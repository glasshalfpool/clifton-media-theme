<?php
/*
Template Name: Open Offer template
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Open Offers - <?php echo wp_get_document_title(); ?></title>
    <?php
    $block_header = do_blocks('
    <!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->')
    ?>
    <?php
    $block_content = do_blocks('
    <!-- wp:group {"tagName":"main","className":"site-content","style":{"spacing":{"margin":{"top":"0"}}}} -->
    <main class="wp-block-group site-content" style="margin-top:0">
        <!-- wp:post-content {"layout":{"type":"constrained"}} /-->
        <!-- wp:spacer {"height":"var:preset|spacing|x-large"} -->
        <div style="height:var(--wp--preset--spacing--x-large)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:create-block/related-content {"contentType":"content-type-stories","align":"full"} /-->
        <!-- wp:create-block/related-content {"contentType":"content-type-events","align":"full"} /-->
    </main>
    <!-- /wp:group -->')
    ?>
    <?php
    $block_footer = do_blocks('
    <!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->')
    ?>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wp-site-blocks">

<?php echo $block_header; ?>

<div class="open-offer-container">

    <a class="back-prompt" href="/open-offers/" title="Back to Open Offers"> &larr; Back to Open Offers</a>

    <div class="investor-info-details">

        <h1><?php
            // Inside the WordPress loop
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $post_id = get_the_ID(); // Get the ID of the current post
                    echo get_the_title($post_id);
                }
            }
            ?>
        </h1>

        <div class="investor-details-container">
        
            <div class="investor-featured-image">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ); ?>" />
            </div>
            
            <div class="investor-details">
                <ul>
                    <li>
                        <label for="<?php echo esc_html(implode(get_field('open-manager'))); ?>">Manager</label>
                        <p><?php echo esc_html(implode(', ', get_field('open-manager'))); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(implode(get_field('open-structure'))); ?>">Structure</label>
                        <p><?php echo esc_html(implode(', ', get_field('open-structure'))); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(implode(get_field('open-sector'))); ?>">Sector</label>
                        <p><?php echo esc_html(implode(', ', get_field('open-sector'))); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(get_field('min_investment')); ?>">Min. Investment</label>
                        <p><?php echo esc_html(get_field('min_investment')); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(implode(get_field('open-type'))); ?>">Type</label>
                        <p><?php echo esc_html(implode(', ', get_field('open-type'))); ?></p>
                    </li>
                </ul>
            </div>

            <div class="investor-details">
                <ul>
                    <li>
                        <label for="<?php echo esc_html(get_field('fund_status')); ?>">Fund Status</label>
                        <p><?php echo esc_html(get_field('fund_status')); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(get_field('fund_target')); ?>">Fund Target</label>
                        <p><?php echo esc_html(get_field('fund_target')); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(get_field('fund_tel')); ?>">Fund Tel.</label>
                        <p><?php echo esc_html(get_field('fund_tel')); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(get_field('fund_email')); ?>">Fund Email</label>
                        <p><?php echo esc_html(get_field('fund_email')); ?></p>
                    </li>
                    <li>
                        <label for="<?php echo esc_html(get_field('fund_website')); ?>">Fund Website</label>
                        <p><?php echo esc_html(get_field('fund_website')); ?></p>
                    </li>
                </ul>
            </div>

        </div>
            
    </div>

    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:info@ifamagazine.com?subject=Open Offers Enquiry - <?php echo get_the_title($post_id); ?>">Email us</a></div>

</div>

<h3 class="about-fund-title">About <?php echo get_the_title($post_id); ?></h3>

<div class="about-the-fund">

    <div class="contact-fund-options">
        <h4>Buying Options</h4>
        <?php if (get_field('growth_invest')) : ?>
            <p><a href="<?php echo esc_html(get_field('growth_investl')); ?>">Growth Invest</a></p>
        <?php endif; ?>
        <?php if (get_field('wealth_club')) : ?>
            <p><a href="<?php echo esc_html(get_field('wealth_club')); ?>">Wealth Club</a></p>
        <?php endif; ?>
        <?php if (get_field('co-investor')) : ?>
            <p><a href="<?php echo esc_html(get_field('co-investor')); ?>">Co-Invester</a></p>
        <?php endif; ?>
        <h4>Research Options</h4>
        <?php if (get_field('3x3_min_insight')) : ?>
            <p><a href="<?php echo esc_html(get_field('3x3_min_insight')); ?>">Insight Video</a></p>
        <?php endif; ?>
        <?php if (get_field('hardman_research')) : ?>
            <p><a href="<?php echo esc_html(get_field('hardman_research')); ?>">Hardman & Co.</a></p>
        <?php endif; ?>
        <?php if (get_field('our_difference')) : ?>
            <p><a href="<?php echo esc_html(get_field('our_difference')); ?>">EISA</a></p>
        <?php endif; ?>
    </div>

    <?php echo $block_content; ?>
</div>

<?php echo $block_footer; ?>

</div>
<?php wp_footer(); ?>
</body>

</html>