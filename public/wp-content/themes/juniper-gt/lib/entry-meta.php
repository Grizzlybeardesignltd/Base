<?php

/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
if (!function_exists('grizzlytheme_entry_meta')) :
    function grizzlytheme_entry_meta() {
        echo '<time class="updated" datetime="' . get_the_time('c') . '">' . sprintf(__('Posted on %1$s at %2$s.', 'foundationpress'), get_the_date(), get_the_time()) . '</time>';
        echo '<p class="byline author">' . __('Written by', 'grizzlytheme') . ' <a href="' . get_author_posts_url(get_the_author_meta('ID')) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
    }
endif;
?>