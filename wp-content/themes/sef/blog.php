<?php
/*
Template Name: livre d'or
*/
?>

<?= get_header() ?>

<main class="main">
    <?php
    $page_id = 23;
    $page_data = get_post($page_id);

    if ($page_data) {
        echo apply_filters('the_content', $page_data->post_content);
    }
    ?>

    <?php
    if ($page_data) {

        // Afficher le premier paragraphe
        if (isset($paragraphs[1])) {
            echo apply_filters('the_content', $paragraphs[1]);
        }
    }
    ?>
    <section class="main__sections__blog">

        <?= apply_filters('the_content', '[contact-form-7 id="b0c2840" title="Livre d\'or"]') ?>

    </section>
</main>
<?= get_footer() ?>
