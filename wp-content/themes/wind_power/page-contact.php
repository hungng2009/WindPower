<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<main id="contact" class="page-section page-contact">
  <section class="section">
    <div class="container">
      <h1 class="section-title">Contact Us</h1>
      <div class="grid grid-2" style="gap: 4rem;">
        <div>
          <h2 style="font-size: 2rem; margin-bottom: 1.5rem; color: var(--dark-color);">Get in Touch</h2>
          <p style="margin-bottom: 2rem; font-size: 1.5rem;">Ready to get your child involved in youth sports? Contact our team to learn about our programs and discover how we can help your young athlete develop healthy habits, build character, and have fun through sports.</p>
          <div style="margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.5rem;">Email</h3>
            <p style="font-size: 1.5rem;" id="contact-email">blackspidermanalpha@gmail.com</p>
          </div>
          <div style="margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.5rem;">Phone</h3>
            <p style="font-size: 1.5rem;" id="contact-phone">0372686###</p>
          </div>
          <div style="margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.5rem;">Address</h3>
            <p style="font-size: 1.5rem;">Hà Nội</p>
          </div>
          <div>
            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.5rem;">Business Hours</h3>
            <p style="font-size: 1.5rem;">Monday - Friday: 8:00 AM - 5:30 PM<br>
              Saturday: Closed<br>
              Sunday: Closed</p>
          </div>
        </div>
        <div class="card">
          <h2 style="margin-bottom: 1.5rem; color: var(--dark-color);">Send us a Message</h2>
          <?php echo do_shortcode('[contact-form-7 id="a39480d" title="Contact Form - Wind Power"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>