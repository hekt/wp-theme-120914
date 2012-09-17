<!DOCTYPE html>
<html lang="ja">

<?php ini_set( 'display_errors', 1 ); ?>

<?php get_header(); ?>

<div class="wrap autopagerize_page_element" id="body">

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<article id="post-<?php the_ID(); ?>">
  <header>
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('[Edit]', '<span class="edit">', '</span>'); ?></h1>
    <ul class="meta">
      <li class="date"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_post_time('M j, Y'); ?></a></li><li class="tags"><?php the_tags("", ", ", ""); ?></li></ul>
    <!-- /ul -->
  </header>

  <section>
    <?php if (false !== strpos($post->post_content, "<!--more")) {
              global $more;
              $more = 0;
              the_content('Read more');
          } else {
              the_excerpt();
          } ?>
  </section>
</article>

<?php endwhile; ?>
<?php endif; ?>

<div class="pagenavi">
  <?php wp_pagenavi(); ?>
</div>

</div>

<?php get_footer(); ?>

</body>
</html>
