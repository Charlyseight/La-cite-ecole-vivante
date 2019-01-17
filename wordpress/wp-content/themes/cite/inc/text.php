<p class="contact__text">
    <?= __('For any questions, do not hesitate to send us a message via this contact form', 'cite'); ?>
</p>
<p class="contact__text">
    <?= __('In order for your message to be sent to us, please fill in all the fields below.', 'cite'); ?>
</p>
<!--<form action="#" method="POST" class="contact__form">
    <label for="name" class="contact__form__label"><?/*= __('Name', 'cite'); */?></label>
    <input type="text" id="name" name="name" class="contact__form__input">
    <label for="mail" class="contact__form__label">E-mail</label>
    <input type="text" id="mail" name="mail" class="contact__form__input">
    <label for="message" class="contact__form__label">Message</label>
    <textarea name="message" id="message" cols="30" rows="10" class="contact__form__textarea"></textarea>
    <input type="submit" value="Envoyer" class="contact__form__input--submit">
</form>-->
<div class="contact__form">
    <?= do_shortcode('[contact-form-7 id="408" title="Form"]'); ?>
</div>
    <div class="coordonnees">
        <a href="tel:<?= get_sub_field('text'); ?>" class="coordonnees__tel"><?= get_sub_field('text'); ?></a>
        <address class="coordonnees__street"><?= get_sub_field('text_2'); ?></address>
        <a href="mailto:<?= get_sub_field('text_3'); ?>" class="coordonnees__mail"><?= get_sub_field('text_3'); ?></a>
    </div>

