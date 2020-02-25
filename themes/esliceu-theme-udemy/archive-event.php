<?php
get_header();
?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
           All events
        </h1>
        <div class="page-banner__intro">
            <p>
                See what is going on our world
            </p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <?php
        while(have_posts()){
            the_post(); ?>
            <div class="event-summary">
                        <a class="event-summary__date t-center" href="#">
                        <?php
                                $eventDate=new DateTime(get_field('event_date'));
                            ?>
                            <span class="event-summary__month"><?=$eventDate->format('M')?>
                            </span>
                            <span class="event-summary__day"><?=$eventDate->format('d')?></span>
                        </a>
                        <div class="event-summary__content">
                            <h5 class="event-summary__title headline headline--tiny"><a href="<?=the_permalink()?>"><?=the_title( )?></a></h5>
                    <p><?=wp_trim_words(get_the_content(),18)?> <a href="<?=the_permalink()?>" class="nu gray">Read more</a></p>

                        </div>
                    </div>

    <?php
        }
        echo paginate_links();
    ?>
    <hr class="section-brake">
    <p>Si vols veure els events anteriors <a href="<?=site_url('/past-events')?>">ves aquí</a></p>
</div>


<?php
get_footer();
?>