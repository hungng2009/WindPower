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
          <h2 style="font-size: 3rem; margin-bottom: 1.5rem; color: var(--dark-color);">Green Energy Solutions —
            Empowering a Sustainable Future</h2>
          <p style="margin-bottom: 1.5rem; font-size: 1.5rem;">At Green Energy Solutions, we believe that the future of
            our planet depends on the choices we make today. Founded with a passion for sustainability and innovation,
            our mission is to harness the power of renewable energy—especially wind power—to create a cleaner, brighter,
            and more sustainable world.</p>
          <p style="margin-bottom: 1.5rem; font-size: 1.5rem;">For over a decade, we’ve been helping communities,
            businesses, and governments transition toward eco-friendly energy systems. Our team of engineers,
            environmental scientists, and energy experts works tirelessly to develop solutions that reduce carbon
            emissions and protect our natural environment for future generations.</p>
          <p style="font-size: 1.5rem;">We don’t just build technology—we build hope. Every turbine we install and every
            project we complete is a step closer to a future where clean energy powers not only homes and cities but
            also social and cultural awareness about protecting our planet.</p>
        </div>
        <div style="text-align: center;">
          <svg width="300" height="300" viewbox="0 0 300 300" style="max-width: 100%;">
            <rect x="148" y="100" width="4" height="150" fill="var(--text-color)" />
            <circle cx="150" cy="100" r="6" fill="var(--primary-color)" />
            <g class="wind-turbine" style="transform-origin: 150px 100px;">
              <path d="M150 100 L150 50 Q170 70 150 100" fill="var(--secondary-color)" opacity="0.8" />
              <path d="M150 100 L115 135 Q135 115 150 100" fill="var(--secondary-color)" opacity="0.8" />
              <path d="M150 100 L185 135 Q165 115 150 100" fill="var(--secondary-color)" opacity="0.8" />
            </g>
            <rect x="135" y="245" width="30" height="15" rx="3" fill="var(--text-color)" />
          </svg>
        </div>
      </div>
      <div style="margin-top: 4rem;">
        <h2 style="font-size: 2rem; margin-bottom: 2rem; text-align: center; color: var(--dark-color);">Our Values</h2>
        <div class="grid grid-3">
          <div class="card">
            <h3>Innovation</h3>
            <p>We are driven by creativity and continuous improvement. By advancing wind and renewable energy
              technologies, we make clean energy more accessible, efficient, and affordable for everyone. Our innovative
              spirit ensures we stay ahead in shaping a sustainable energy future.</p>
          </div>
          <div class="card">
            <h3>Sustainability</h3>
            <p>We are deeply committed to protecting our planet. Every decision we make — from sourcing materials to
              implementing large-scale projects — is guided by environmental responsibility. We aim to minimize our
              carbon footprint and foster long-term harmony between technology and nature.</p>
          </div>
          <div class="card">
            <h3>Excellence</h3>
            <p>We take pride in delivering outstanding results with precision, reliability, and integrity. Every project
              we complete is a reflection of our commitment to quality and customer satisfaction. Excellence, to us,
              means doing the right thing — not just for our clients, but for the planet.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>