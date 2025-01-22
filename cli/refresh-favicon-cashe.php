#!/usr/bin/env php
<?php
declare(strict_types=1);
require(__DIR__ . '/_cli.php');

fwrite(STDERR, "Refreshing the favicon cashe …\n");

exec(dirname(__FILE__) . '/clear-favicon-cashe.sh');

FreshRSS_Context::initSystem();
FreshRSS_Context::systemConf()->auth_type = 'none';  // avoid necessity to be logged in (not saved!)

// <Mutex>
// Avoid having multiple processes at the same time
$mutexFile = TMP_PATH . '/refresh.favicon.freshrss.lock';
$mutexTtl = 900; // seconds (refreshed before each new feed)
if (file_exists($mutexFile) && ((time() - (@filemtime($mutexFile) ?: 0)) > $mutexTtl)) {
	unlink($mutexFile);
}

if (($handle = @fopen($mutexFile, 'x')) === false) {
	/* notice('FreshRSS favicon refresh was already running, so aborting new run at ' . $begin_date->format('c')); */
	die();
}
fclose($handle);

register_shutdown_function(static function () use ($mutexFile) {
	unlink($mutexFile);
});
// </Mutex>

$users = listUsers();
shuffle($users);
if (FreshRSS_Context::systemConf()->default_user !== '') {
	array_unshift($users, FreshRSS_Context::systemConf()->default_user);
	$users = array_unique($users);
}

$limits = FreshRSS_Context::systemConf()->limits;
$min_last_activity = time() - $limits['max_inactivity'];
foreach ($users as $user) {
	FreshRSS_Context::initUser($user);
	if (!FreshRSS_Context::hasUserConf()) {
		notice('Invalid user ' . $user);
		continue;
	}
	if (!FreshRSS_Context::userConf()->enabled) {
		notice('FreshRSS skip disabled user ' . $user);
		continue;
	}
	if (($user !== FreshRSS_Context::systemConf()->default_user) &&
			(FreshRSS_UserDAO::mtime($user) < $min_last_activity)) {
		notice('FreshRSS skip inactive user ' . $user);
		continue;
	}

	FreshRSS_Auth::giveAccess();

	/* notice('FreshRSS refresh favicons for ' . $user . '…'); */
	echo $user, ' ';	//Buffered

    FreshRSS_feed_Controller::refresh_favicon();

	gc_collect_cycles();
}

/* $end_date = date_create('now');
$duration = date_diff($end_date, $begin_date);
notice('FreshRSS favicon refresh done for ' . count($users) .
	' users, using ' . format_bytes(memory_get_peak_usage(true)) . ' of memory, in ' .
	$duration->format('%a day(s), %h hour(s), %i minute(s) and %s seconds.')); */

echo 'End.', "\n";