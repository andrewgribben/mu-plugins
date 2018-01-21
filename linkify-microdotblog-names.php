/* Auto-linkify @names for Micro.blog */
/* Add to your theme's functions.php or your site's functionality plugin */

function linkify_microdotblog_names( $content ) {
  $string = $content;
  $pattern = '/(^|\s)@([A-Za-z0-9_]+)/';
  $replacement = '\1<a href="https://micro.blog/\2">@\2</a>';

  $content = preg_replace($pattern, $replacement, $string);
  return $content;
}

add_filter( 'content_save_pre', 'linkify_microdotblog_names', 10, 1 );
