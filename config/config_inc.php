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