<?php
/**
 * Template Name: Page About Us
 */
get_header();
?>
<main id="about" class="page-section page-about-us">
  <section class="section">
    <div class="container">
      <div class="grid grid-2" style="align-items: center; gap: 4rem;">
        <div>
          <h2 style="font-size: 3rem; margin-bottom: 1.5rem; color: var(--dark-color);">Active Youth Initiative —
            Empowering a Healthier Generation</h2>
          <p style="margin-bottom: 1.5rem; font-size: 1.5rem;">At Active Youth Initiative, we believe that the future of
            our communities depends on the choices we make for our health and well-being today. Founded with a passion
            for fitness, teamwork, and youth empowerment, our mission is to inspire young people to embrace active
            living through sports and physical activity.</p>
          <p style="margin-bottom: 1.5rem; font-size: 1.5rem;">For years, we’ve been helping schools, organizations, and
            local communities create engaging sports programs that motivate young individuals to move, grow, and thrive.
            Our team of coaches, educators, and wellness experts works tirelessly to promote balanced lifestyles that
            enhance both physical and mental health for future generations.</p>
          <p style="font-size: 1.5rem;">We don’t just build stronger bodies—we build stronger communities. Every sports
            event, every training session, and every mentoring moment brings us closer to a generation that values
            health, resilience, and teamwork as essential parts of life.</p>
        </div>
        <div style="text-align: center;">
          <svg width="300" height="300" viewBox="0 0 300 300" style="max-width: 100%;"><!-- Soccer ball -->
            <circle cx="150" cy="120" r="40" fill="var(--primary-color)" opacity="0.9"></circle>
            <path d="M150 80 L130 95 L135 120 L165 120 L170 95 Z" fill="white"></path>
            <path d="M130 95 L110 110 L115 135 L135 120 Z" fill="white"></path>
            <path d="M170 95 L190 110 L185 135 L165 120 Z" fill="white"></path>
            <path d="M110 110 L115 135 L135 150 L150 160 L165 150 L185 135 L190 110" stroke="var(--dark-color)"
              stroke-width="2" fill="none"></path> <!-- Basketball -->
            <circle cx="100" cy="200" r="25" fill="var(--secondary-color)" opacity="0.8"></circle>
            <path d="M75 200 Q100 180 125 200 Q100 220 75 200" stroke="var(--dark-color)" stroke-width="2" fill="none">
            </path>
            <path d="M100 175 Q120 200 100 225 Q80 200 100 175" stroke="var(--dark-color)" stroke-width="2" fill="none">
            </path> <!-- Tennis ball -->
            <circle cx="200" cy="200" r="20" fill="var(--accent-color)" opacity="0.8"></circle>
            <path d="M180 200 Q200 185 220 200 Q200 215 180 200" stroke="white" stroke-width="2" fill="none"></path>
            <!-- Running figure -->
            <g transform="translate(150, 240)">
              <circle cx="0" cy="-15" r="8" fill="var(--primary-color)"></circle>
              <rect x="-3" y="-7" width="6" height="20" rx="3" fill="var(--primary-color)"></rect>
              <rect x="-8" y="-5" width="16" height="3" rx="1.5" fill="var(--primary-color)"></rect>
              <rect x="-2" y="13" width="4" height="15" rx="2" fill="var(--primary-color)"></rect>
              <rect x="3" y="18" width="4" height="10" rx="2" fill="var(--primary-color)"></rect>
            </g>
          </svg>
        </div>
      </div>
      <div style="margin-top: 4rem;">
        <h2 style="font-size: 2rem; margin-bottom: 2rem; text-align: center; color: var(--dark-color);">Our Values</h2>
        <div class="grid grid-3">
          <div class="card">
            <h3>Inspiration</h3>
            <p>We believe in motivating young people to discover their potential through movement and play. By creating
              fun, inclusive, and challenging sports opportunities, we encourage every youth to find joy in an active
              lifestyle.</p>
          </div>
          <div class="card">
            <h3>Wellness</h3>
            <p>Our commitment goes beyond physical fitness—we promote overall well-being that includes mental health,
              nutrition, and emotional growth. Through education and support, we aim to build lifelong habits of
              self-care and balance.</p>
          </div>
          <div class="card">
            <h3>Excellence</h3>
            <p>We strive to deliver impactful programs that nurture discipline, teamwork, and perseverance. Excellence
              means giving your best—on and off the field—and building confidence that extends into all areas of life.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>