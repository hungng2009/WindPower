<?php
/**
 * Template Name: Page Blogs List
 */
get_header();
?>
<main id="blogs" class="page-section page-blogs-list">
  <section class="section">
    <div class="container">
      <h1 class="section-title">Latest Blog Posts</h1>

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
      );
      $query = new WP_Query($args);
      ?>

      <?php if ($query->have_posts()): ?>
        <div class="grid">
          <?php while ($query->have_posts()):
            $query->the_post(); ?>
            <article class="article-card">
              <div class="article-image">
                <?php if (has_post_thumbnail()): ?>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>
                  </a>
                <?php else: ?>
                  <a href="<?php the_permalink(); ?>">🌿</a>
                <?php endif; ?>
              </div>

              <div class="article-content">
                <div class="article-meta">
                  <?php echo get_the_date(); ?> •
                  <?php
                  $word_count = str_word_count(strip_tags(get_the_content()));
                  $read_time = ceil($word_count / 200);
                  echo $read_time . ' min read';
                  ?>
                </div>

                <h2 class="article-title">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>

                <p class="article-excerpt">
                  <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                </p>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination" style="text-align:center; margin-top:2rem;">
          <?php
          echo paginate_links([
            'total' => $query->max_num_pages,
            'prev_text' => __('« Previous', 'textdomain'),
            'next_text' => __('Next »', 'textdomain'),
          ]);
          ?>
        </div>

      <?php else: ?>
        <p>No blog posts found.</p>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>