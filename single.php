<!DOCTYPE html>
<html lang="ja">

<?php ini_set( 'display_errors', 1 ); ?>


<?php get_header(); ?>

<div class="wrap" id="body">

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<article id="post-<?php the_ID(); ?>">
  <header>
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('[Edit]', '<span class="edit">', '</span>'); ?></h1>
    <ul class="meta">
      <li class="date"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_post_time('M j Y'); ?></a></li><li class="tags"><?php the_tags("", ", ", ""); ?></li></ul>
    <!-- /ul -->
  </header>

  <section>
    <?php the_content('Read more'); ?>
  </section>
  <aside>

    <?php if(!is_preview()): ?>

    <nav id="social_buttons" class="share_buttons">
      <h1>Share</h1>
      <ul>
        <li id="hatebu_button"><a href="http://b.hatena.ne.jp/entry/<?php echo ereg_replace('^http://', '', get_permalink()); ?>" target="_blank"><span class="text">B!</span><span class="count">0</span></li><!--
     --><li id="tweet_button"><a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank"><span class="text">ツイート</span></a><a href="http://twitter.com/search?q=<?php echo urlencode(get_permalink()); ?>" target="_blank"><span class="count">0</span></a></li><!--
     --><li id="fblike_button"><a href="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>" target="_blank"><span class="text">いいね !</span></a></li></ul>
      <!-- /ul -->
    </nav>

    <?php endif; ?>

    <?php if (function_exists('similar_posts')): ?>
    
    <nav class="related_posts">
      <h1>Related Posts</h1>
      <?php similar_posts(); ?>
    </nav>
    
    <?php endif; ?>
    
  </aside>
</article>

<?php endwhile; ?>
<?php endif; ?>

<?php comments_template(); ?>

</div>

<?php get_footer(); ?>

</body>
</html>

