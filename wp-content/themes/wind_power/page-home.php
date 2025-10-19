<?php
/**
 * Template Name: Home Page
 */
get_header();
?>
<main id="primary" class="site-main">
  <div class="page-top">
    <main id="home" class="page-section active">
      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <h1 id="hero-title">Powering Tomorrow with Wind Energy</h1>
            <p id="hero-subtitle">Leading the renewable energy revolution with innovative wind power solutions</p>
            <div class="btn-flex">
              <a href="#" class="btn" data-page="about">Learn More</a>
              <a href="#" class="btn-outline btn" data-page="contact">Get Started</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">
          <h2 class="section-title">Why Choose Wind Energy?</h2>
          <div class="grid grid-3">
            <div class="card">
              <div class="card-icon">
                <svg width="24" height="24" fill="white" viewbox="0 0 24 24">
                  <path d="M12 2L2 7v10c0 5.55 3.84 9.739 9 11 5.16-1.261 9-5.45 9-11V7l-10-5z" />
                </svg>
              </div>
              <h3>Clean &amp; Sustainable</h3>
              <p>Zero emissions during operation, helping combat climate change and reduce carbon footprint.</p>
            </div>
            <div class="card">
              <div class="card-icon">
                <svg width="24" height="24" fill="white" viewbox="0 0 24 24">
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                </svg>
              </div>
              <h3>Cost Effective</h3>
              <p>Low operational costs and competitive electricity prices make wind power economically viable.</p>
            </div>
            <div class="card">
              <div class="card-icon">
                <svg width="24" height="24" fill="white" viewbox="0 0 24 24">
                  <path
                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                </svg>
              </div>
              <h3>Reliable Technology</h3>
              <p>Modern turbines operate efficiently in various conditions with minimal maintenance requirements.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="section stats-section">
        <div class="container">
          <h2 class="section-title">Wind Energy Impact</h2>
          <div class="grid grid-3">
            <div class="stat-item"><span class="stat-number">899 GW</span> <span class="stat-label">Global Wind
                Capacity</span>
            </div>
            <div class="stat-item"><span class="stat-number">10.5%</span> <span class="stat-label">Global Electricity
                Generation</span>
            </div>
            <div class="stat-item"><span class="stat-number">3.8M</span> <span class="stat-label">Jobs
                Worldwide</span>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
</main><!-- #main -->
<?php get_footer(); ?>