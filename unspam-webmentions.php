/**
 * Unspam Webmention comments
 */
function unspam_webmentions($approved, $commentdata) {
  return $commentdata['comment_type'] == 'webmention' ? 1 : $approved;
}

add_filter('pre_comment_approved', 'unspam_webmentions', '99', 2);
