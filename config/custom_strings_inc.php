<?php

# Translation for Custom Status Code: testing
switch( $g_active_language ) {

	case 'french':
		$s_status_enum_string = '10:nouveau,20:commentaire,30:accepté,40:confirmé,50:affecté,55:en cours,60:à tester,80:résolu,90:fermé';
		
		$s_progress_bug_title = 'En cours';
		$s_progress_bug_button = 'Demarer la tâche';

		$s_email_notification_title_for_status_bug_progress = 'La tâche suivante est enc cours.';

		$s_testing_bug_title = 'Mettre le bogue en test';
		$s_testing_bug_button = 'A tester';

		$s_email_notification_title_for_status_bug_testing = 'Le bogue suivant est prêt à être TESTE.';
		break;

	default: # english
		$s_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,55:in progress,60:testing,80:resolved,90:closed';
		
		$s_progress_bug_title = 'In Progress';
		$s_progress_bug_button = 'Start Progress on Task';

		$s_email_notification_title_for_status_bug_progress = 'The following Task is in PROGRESS.';

		$s_testing_bug_title = 'Mark Task Ready for Testing';
		$s_testing_bug_button = 'Ready for Testing';

		$s_email_notification_title_for_status_bug_testing = 'The following Task is ready for TESTING.';
		break;
}