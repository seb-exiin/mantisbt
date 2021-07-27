$g_db_password            = 'rMAd4pXr';

$g_default_timezone       = 'Europe/Paris';


$g_status_colors = array( 'new' => '#ffa0a0', # red,
    'feedback' => '#ff50a8', # purple
    'acknowledged' => '#ffd850', # orange
    'confirmed' => '#ffffb0', # yellow
    'assigned' => '#c8c8ff', # blue
    'resolved' => '#cceedd', # buish-green
    'closed' => '#e8e8e8'); # light gray


$g_custom_headers = array( 'Content-Security-Policy:' );

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
//$g_cookie_path = './';
//$g_cookie_domain = '.exiin.com';

################################
# Customizing Status Values
# https://www.mantisbt.org/docs/master/en-US/Admin_Guide/html/admin.customize.status.html
################################

# Revised enum string with new 'testing' status
$g_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,55:progress,60:testing,80:resolved,90:closed';

# Status color additions
$g_status_colors['testing'] = '#ACE7AE';
$g_status_colors['progress'] = '#FF7F50';

$g_status_enum_workflow[NEW_]         ='30:acknowledged,20:feedback,40:confirmed,50:assigned,55:progress,80:resolved';
$g_status_enum_workflow[FEEDBACK]     ='30:acknowledged,40:confirmed,50:assigned,55:progress,80:resolved';
$g_status_enum_workflow[ACKNOWLEDGED] ='40:confirmed,20:feedback,50:assigned,55:progress,80:resolved';
$g_status_enum_workflow[CONFIRMED]    ='50:assigned,55:progress,20:feedback,30:acknowledged,80:resolved';
$g_status_enum_workflow[ASSIGNED]     ='55:progress, 60:testing,20:feedback,30:acknowledged,40:confirmed,80:resolved';
$g_status_enum_workflow[PROGRESS]     ='60:testing,80:resolved,20:feedback,50:assigned';
$g_status_enum_workflow[TESTING]      ='80:resolved,20:feedback,50:assigned';
$g_status_enum_workflow[RESOLVED]     ='90:closed,20:feedback,50:assigned';
$g_status_enum_workflow[CLOSED]       ='20:feedback,50:assigned';