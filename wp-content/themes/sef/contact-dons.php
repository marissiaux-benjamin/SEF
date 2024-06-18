<?php
/*
Template Name: contact/don
*/
?>

<?= get_header() ?>
    <main class="main">
        <?= get_the_content() ?>

        <section class="main__form-section">
            <h3 class="hidden-title">Formulaire</h3>
            <?= apply_filters('the_content', '[contact-form-7 id="5e5917c" title="Untitled"]') ?>
        </section>

    </main>

<?= get_footer() ?>