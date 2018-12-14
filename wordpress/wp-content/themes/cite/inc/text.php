<p class="contact__text">
    Pour toutes questions, n’hésitez pas à nous envoyer un message via ce formulaire de contact
</p>
<p class="contact__text">
    Pour que votre message nous soit bien transmis, veuillez remplir tous les champs ci-dessous.
</p>
<form action="#" method="POST" class="contact__form">
    <label for="name" class="contact__form__label">Nom</label>
    <input type="text" id="name" name="name" class="contact__form__input">
    <label for="mail" class="contact__form__label">E-mail</label>
    <input type="text" id="mail" name="mail" class="contact__form__input">
    <label for="message" class="contact__form__label">Message</label>
    <textarea name="message" id="message" cols="30" rows="10" class="contact__form__textarea"></textarea>
    <input type="submit" value="Envoyer" class="contact__form__input--submit">
</form>

<?php if(have_rows('encart')): while(have_rows('encart')): the_row(); ?>
    <div class="coordonnees">
        <a href="tel:<?= get_sub_field('text'); ?>" class="coordonnees__tel"><?= get_sub_field('text'); ?></a>
        <address class="coordonnees__street"><?= get_sub_field('text_2'); ?></address>
        <a href="mailto:<?= get_sub_field('text_3'); ?>" class="coordonnees__mail"><?= get_sub_field('text_3'); ?></a>
    </div>
<?php endwhile; endif; ?>

