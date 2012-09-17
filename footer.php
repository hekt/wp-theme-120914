<footer>
  <address>&copy; 2007-2012 <a href="mailto:hektorg@gmail.com">hekt</a>.</address>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/scripts/common.js"></script>

<?php if(is_single()): ?>
<!-- share buttons -->
<script src="http://blog.hekt.org/scripts/share-button.js"></script>
<?php endif; ?>

<?php if(is_single() and (strpos(get_the_content(), "brush: ") !== false)): ?>
<!-- Syntax Highlighter -->
<script src="http://alexgorbatchev.com/pub/sh/3.0.83/scripts/shCore.js"></script>
<script src="http://alexgorbatchev.com/pub/sh/3.0.83/scripts/shAutoloader.js"></script>
<script type="text/javascript">
  SyntaxHighlighter.autoloader(
  'sh bash shell  http://blog.hekt.org/scripts/sh/shBrushBash.js',
  'js jscript javascript  http://blog.hekt.org/scripts/sh/shBrushJScript.js',
  'py python  http://blog.hekt.org/scripts/sh/shBrushPython.js',
  'php  http://blog.hekt.org/scripts/sh/shBrushPhp.js',
  'coffee coffeescript  http://blog.hekt.org/scripts/sh/shBrushCoffeeScript.js',
  'applescript  http://blog.hekt.org/scripts/sh/shBrushAppleScript.js',
  'css  http://blog.hekt.org/scripts/sh/shBrushCss.js',
  'xml html xhtml  http://blog.hekt.org/scripts/sh/shBrushXml.js',
  'lisp elisp  http://blog.hekt.org/scripts/sh/shBrushLisp.js',
  'apache  http://blog.hekt.org/scripts/sh/shBrushApache.js',
  'plain text  http://blog.hekt.org/scripts/sh/shBrushPlain.js',
  'md mdt markdown  http://blog.hekt.org/scripts/sh/shBrushMarkdown.js'
  );
  SyntaxHighlighter.all();
</script>
<?php endif; ?>

<?php if(!$user_ID): ?>
<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1886227-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php endif; ?>

<?php wp_footer(); ?>
