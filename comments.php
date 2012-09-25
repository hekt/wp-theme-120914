<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentyeleven_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div id="comments">
  <?php if ( post_password_required() ) : ?>
  <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
  <?php endif; ?>

  <?php if ( have_comments() ) : ?>
  <h1 id="comments-title">
    <?php
	   printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'twentyeleven' ),
	   number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
  </h1>

  <ol class="commentlist">
	<?php
	   /* Loop through and list the comments. Tell wp_list_comments()
	   * to use twentyeleven_comment() to format the comments.
	   * If you want to overload this in a child theme then you can
	   * define twentyeleven_comment() and that will be used instead.
	   * See twentyeleven_comment() in twentyeleven/functions.php for more.
	   */
	   wp_list_comments( array( 'callback' => 'twentyeleven_comment' ) );
	?>
  </ol>

  <?php
	 elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
  <p class="nocomments"><?php _e( 'Comments are closed.', 'twentyeleven' ); ?></p>
  <?php endif; ?>


  <?php if ('open' == $post->comment_status): ?>
  <div id="respond">
    <h3 id="reply-title">Leave a comment</h3>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ($user_ID): ?>
      <p class="logged-in-as">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. (<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">Logout</a>)</p>
      <?php else: ?>
      <p class="comment-notes">メールアドレスが公開されることはありません。</p>
      <p class="comment-form-author"><label for="author" class="inlined">Name</label> <input id="author" name="author" type="text" value="" size="30"></p>
      <p class="comment-form-email"><label for="email" class="inlined">Email</label> <input id="email" name="email" type="text" value="" size="30"></p>
      <p class="comment-form-url"><label for="url" class="inlined">Website</label><input id="url" name="url" type="text" value="" size="30"></p>
      <?php endif; ?>

      <p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
      <p class="form-submit">
        <input name="submit" type="submit" id="submit" value="Submit">
        <input type='hidden' name='comment_post_ID' value='<?php echo $id; ?>' id='comment_post_ID'>
        <?php do_action('comment_form', $post->ID); ?>
      </p>
    </form>
  </div>

  <?php endif; ?>
    
</div><!-- #comments -->
