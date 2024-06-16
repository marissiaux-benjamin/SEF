<?php
/*
Template Name: don matériel
*/
?>

<?= get_header() ?>

    <main class="main main-contact">
        <?php
        $page_id = 504;
        $page_data = get_post($page_id);

        if ($page_data) {
            echo apply_filters('the_content', $page_data->post_content);
        }
        ?>
        <section class="main__sections__form">
            <h3 class="hidden-title">Formulaire</h3>
            <form action="#">
                <label for="nom">Nom complet *</label>
                <input type="text" id="nom" name="mon-champ" placeholder="Ex: Jean Sanchez">

                <label for="email">Email *</label>
                <input type="text" id="email" name="mon-champ" placeholder="Ex: jean.sanchez@gmail.com">

                <label for="materiel">Type de matériel *</label>
                <select id="materiel" name="mon-champ">
                    <option selected>Meubles</option>
                    <option>Vêtements</option>
                    <option>Livres</option>
                </select>
                <label for="message">Message *</label>
                <textarea type="text" id="message" name="mon-champ" maxlength="500" rows="2"
                          placeholder="Ex: Bonjour, j'aimerais vous demander..."></textarea>
                <div>
                    <input type="submit" value="Envoyer" id="main__sections__form__btn">
                </div>
            </form>
        </section>
    </main>
<?= get_footer() ?>