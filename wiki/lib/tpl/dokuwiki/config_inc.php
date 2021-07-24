<?php

$g_default_timezone       = 'Europe/Paris';

$g_status_colors = array( 'new' => '#ffa0a0', # red,
    'feedback' => '#ff50a8', # purple
    'acknowledged' => '#ffd850', # orange
    'confirmed' => '#ffffb0', # yellow
    'assigned' => '#c8c8ff', # blue
    'resolved' => '#cceedd', # buish-green
    'closed' => '#e8e8e8'); # light gray



#####################
# Wiki Integration
#####################

# Wiki Integration Enabled?
$g_wiki_enable = ON;

#Wiki Engine.
$g_wiki_engine = 'dokuwiki';

#Wiki namespace 
$g_wiki_root_namespace = 'mantis';

/**
 * URL under which the wiki engine is hosted.
 * Must be on the same server as MantisBT, requires trailing '/'.
 * By default, this is derived from the global MantisBT path ($g_path),
 * replacing the URL's path component by the wiki engine string (i.e. if
 * $g_path = 'http://example.com/mantis/' and $g_wiki_engine = 'dokuwiki',
 * the wiki URL will be 'http://example.com/dokuwiki/')
 * @global string $g_wiki_engine_url
 */
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

$g_wiki_engine_url = $protocol . '://' .$_SERVER['HTTP_HOST'] . '/wiki/';
