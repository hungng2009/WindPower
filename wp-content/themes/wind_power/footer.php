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
        <h3>Healthy Youth Movement</h3>
        <p>Empowering the next generation to live healthier, more active lives through the power of sports and community engagement.</p>
      </div>
      <div class="footer-section">
        <h3>Services</h3>
        <ul style="list-style: none;">
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: white; text-decoration: none; font-size: 1.3rem;">Youth Sports Development Programs</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: white; text-decoration: none; font-size: 1.3rem;">School Fitness Initiatives</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: white; text-decoration: none; font-size: 1.3rem;">Community Wellness Projects</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: white; text-decoration: none; font-size: 1.3rem;">Sports Coaching & Mentorship</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: white; text-decoration: none; font-size: 1.3rem;">Nutrition and Health Workshops</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="#" style="color: white; text-decoration: none; font-size: 1.3rem;">Mental Health & Motivation Seminars</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Healthy Youth Movement</h3>
        <ul style="list-style: none;">
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/about-us'); ?>" class="nav-link"
              data-page="about" style="color: white; text-decoration: none;">About Us</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/blogs'); ?>" class="nav-link"
              data-page="blogs" style="color: white; text-decoration: none;">Blog</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/news'); ?>" class="nav-link"
              data-page="news" style="color: white; text-decoration: none;">News</a></li>
          <li style="margin-bottom: 0.5rem;"><a href="<?php echo site_url('/contact'); ?>" class="nav-link"
              data-page="contact" style="color: white; text-decoration: none;">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Connect</h3>
        <p>Follow us for the latest updates on youth sports and wellness.</p>
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