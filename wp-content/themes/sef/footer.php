<footer class="footer">
    <h2 class="hidden-title">footer</h2>
    <section class="footer__section">
        <h3 class="footer__section__title">Coordonnées</h3>
        <ul class="footer__section__list">
            <li class="footer__section__list__item">
                tel&nbsp;:&nbsp;<a href="tel: 085/215752" title="Téléphoner à Benjamin Marissiaux"
                                   class="footer__section__list__item__link">085 / 21 57 52 </a>
            </li>
            <li class="footer__section__list__item">
                mail&nbsp;:&nbsp;<a href="mailto:contact@sefasbl.com" class="footer__section__list__item__mail">contact@sefasbl.com</a>
            </li>
            <li class="footer__section__list__item">
                Adresse&nbsp;:&nbsp;Rue du Marché, 33 4500 HUY
            </li>
        </ul>
    </section>
    <section class="footer__section">
        <h3 class="footer__section__title">Navigation</h3>
        <ul class="footer__section__list">
            <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                <li class="footer__section__list__item">
                    <a class="footer__section__list__item__nav" href="<?= $link->url ?>"
                       title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="footer__section">
        <h3 class="footer__section__title">Divers</h3>
        <ul class="footer__section__lis">
            <li class="footer__section__list__item">
                <a href="#" class="footer__section__list__item__nav">Facebook</a>
            </li>
            <li class="footer__section__list__item">
                <a href="#" class="footer__section__list__item__nav">FAQ</a>
            </li>
            <li class="footer__section__list__item">
                <a href="#" class="footer__section__list__item__nav">Mentions l&eacute;gales</a>
            </li>
        </ul>
    </section>
</footer>
</body>
</html>

