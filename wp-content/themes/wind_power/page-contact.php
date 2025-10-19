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
          <p style="margin-bottom: 2rem; font-size: 1.5rem;">Ready to harness the power of wind energy? Contact our team
            of experts to discuss your renewable energy needs and discover how we can help you transition to clean,
            sustainable power.</p>
          <div style="margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.5rem;">Email</h3>
            <p style="font-size: 1.5rem;" id="contact-email">hungtntmine@gmail.com</p>
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
          <form id="contact-form">
            <div class="form-group"><label for="name" class="form-label">Full Name</label> <input type="text" id="name"
                name="name" class="form-input" required>
            </div>
            <div class="form-group"><label for="email" class="form-label">Email Address</label> <input type="email"
                id="email" name="email" class="form-input" required>
            </div>
            <div class="form-group"><label for="company" class="form-label">Company (Optional)</label> <input
                type="text" id="company" name="company" class="form-input">
            </div>
            <div class="form-group"><label for="subject" class="form-label">Subject</label> <select id="subject"
                name="subject" class="form-input" required>
                <option value="">Select a topic</option>
                <option value="consultation">Free Consultation</option>
                <option value="project">New Project Inquiry</option>
                <option value="maintenance">Maintenance Services</option>
                <option value="partnership">Partnership Opportunities</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group"><label for="message" class="form-label">Message</label> <textarea id="message"
                name="message" class="form-input form-textarea" required
                placeholder="Please let us know your feedback."></textarea>
            </div><button type="submit" class="btn"
              style="width: 100%; background: var(--primary-color); color: white;">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>