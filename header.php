<head>
  <meta charset="UTF-8">
  <meta name="verify-v1" 
        content="cddRBX0joldF5WkB2lKXfkGqWLkk2GJrvCIvWR59ux4=" />
  <meta name="y_key" content="4c1e79cfd9e84936" /> 
  <!--[if lte IE 8]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
      </script>
      <![endif]-->

  <title><?php wp_title('', true, 'right'); if (is_home()) { bloginfo('name'); } ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"  media="screen" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="blog.hekt.org &raquo; RSS Feed" href="<?php bloginfo('rss2_url');?>" />

  <?php if(!is_singular()): ?>
  <link rel="next" href="<?php next_posts(); ?>" title="Older Entries" />
  <link rel="prev" href="<?php previous_posts(); ?>" title="Newer Entries" />
  <?php endif; ?>

  <?php 
     if (is_single()) {
       $rss_tags = get_the_tags();
       if ($rss_tags) {
         foreach($rss_tags as $tag) {
           echo "<link rel='alternate' type='application/rss+xml' title='" .
             "blog.hekt.org &raquo; タグ | " . $tag->name . "' href='" . 
             get_bloginfo('url') . "/archives/tag/" . $tag->slug . "/feed'>\n";
         }
       }
     }
  ?>

  <?php wp_deregister_script('jquery');
        wp_enqueue_script('jquery',
                          'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
                           array(),
                           '1.7.1'); ?>

  <?php wp_head(); ?>
</head>

<body>

<header>
  <h1><a href="<?php bloginfo('url'); ?>">blog.hekt.org</a></h1>
  <?php get_search_form(); ?>
</header>
