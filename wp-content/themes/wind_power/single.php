<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wind_power
 */

get_header();
?>

<main class="page-section single-post">
  <section class="section single-wrapper">
    <div class="container">
      <?php
      while (have_posts()):
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>

          <?php if (has_post_thumbnail()): ?>
            <div class="single-featured-image">
              <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
            </div>
          <?php endif; ?>

          <h1 class="single-title"><?php the_title(); ?></h1>

          <div class="single-meta">
            <span class="single-date"><?php echo get_the_date(); ?></span> •
            <span class="single-author">by <?php the_author(); ?></span> •
            <span class="single-readtime">
              <?php
              $word_count = str_word_count(strip_tags(get_the_content()));
              $read_time = ceil($word_count / 200);
              echo $read_time . ' min read';
              ?>
            </span>
          </div>

          <div class="single-content">
            <?php the_content(); ?>
          </div>

          <?php if (comments_open() || get_comments_number()): ?>
            <div class="single-comments">
              <?php comments_template(); ?>
            </div>
          <?php endif; ?>

        </article>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php
get_footer();
