<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wind_power
 */

?>

<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Green Energy Solutions</h3>
        <p>Harnessing the power of wind to create clean energy for a brighter planet.</p>
      </div>
      <div class="footer-section">
        <h3>Services</h3>
        <ul style="list-style: none;">
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #94a3b8; text-decoration: none; font-size: 1.3rem;">Wind Energy Project Development</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #94a3b8; text-decoration: none; font-size: 1.3rem;">Sustainability Consulting</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #94a3b8; text-decoration: none; font-size: 1.3rem;">Energy Efficiency Solutions</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #94a3b8; text-decoration: none; font-size: 1.3rem;">Environmental Education Programs</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #94a3b8; text-decoration: none; font-size: 1.3rem;">Smart Energy Management</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: #94a3b8; text-decoration: none; font-size: 1.3rem;">Renewable Energy Consulting</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Company</h3>
        <ul style="list-style: none;">
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/about-us'); ?>" class="nav-link"
              data-page="about" style="color: #94a3b8; text-decoration: none;">About Us</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/blogs'); ?>" class="nav-link"
              data-page="blogs" style="color: #94a3b8; text-decoration: none;">Blog</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/news'); ?>" class="nav-link"
              data-page="news" style="color: #94a3b8; text-decoration: none;">News</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/contact'); ?>" class="nav-link"
              data-page="contact" style="color: #94a3b8; text-decoration: none;">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Connect</h3>
        <p>Follow us for the latest wind energy news and updates.</p>
        <div style="margin-top: 1rem;"><span style="margin-right: 1rem; font-size: 1.5rem;">📧</span> <span
            style="margin-right: 1rem; font-size: 1.5rem;">📱</span> <span
            style="margin-right: 1rem; font-size: 1.5rem;">🌐</span>
        </div>
      </div>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="/_sdk/element_sdk.js"></script>
<script src="/_sdk/data_sdk.js" type="text/javascript"></script>
<script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>