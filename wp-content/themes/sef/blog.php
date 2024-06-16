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
    <section class="main__sections__form">
        <article class="main__sections__form__post">
            <h4>
                Name
            </h4>
            <p>
                updated_at
            </p>
            <p>
                message
            </p>
        </article>
        <form action="#">
            <label for="nom">Nom complet *</label>
            <input type="text" id="nom" name="mon-champ" placeholder="Ex: Jean Sanchez">

            <label for="message">Message *</label>
            <textarea type="text" id="message" name="mon-champ" maxlength="500" rows="2"
                      placeholder="Ex: Merci à tous le staff du SEF!"></textarea>
            <div>
                <button type="submit">Publier</button>
            </div>
        </form>
    </section>
</main>
<?= get_footer() ?>
