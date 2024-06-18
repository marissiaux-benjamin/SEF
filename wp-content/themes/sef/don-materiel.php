<?php
/*
Template Name: don matériel
*/
?>

<?= get_header() ?>

    <main class="main">

        <?= get_the_content() ?>

        <section class="main__materiel">
            <h3 class="hidden-title">Formulaire</h3>
            <?= apply_filters('the_content', '[contact-form-7 id="139a9c7" title="Don matériel"]') ?>
        </section>
    </main>
<?= get_footer() ?>