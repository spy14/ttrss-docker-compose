<?php
	// Your RDBMS must be configured to accept connections
	// via TCP/IP and authentified by password.

	define('DB_TYPE', getenv('TTRSS_DB_TYPE')); // or mysql
	define('DB_HOST', getenv('TTRSS_DB_HOST'));
	define('DB_USER', getenv('TTRSS_DB_USER'));
	define('DB_NAME', getenv('TTRSS_DB_NAME'));
	define('DB_PASS', getenv('TTRSS_DB_PASS'));
	//define('DB_PORT', getenv('TTRSS_DB_PORT')); // when neeeded, PG-only

	define('MAGPIE_FETCH_TIME_OUT', getenv('TTRSS_MAGPIE_FETCH_TIME_OUT'));
	// Magpie's default timeout is 5 seconds.  Some RSS feeds,
	// such as from large Trac installs, can take significantly
	// longer than 5 seconds to generate.  To prevent failed
	// updates, increase this.

	define('MAGPIE_CACHE_DIR', getenv('TTRSS_MAGPIE_CACHE_DIR'));
	// Local cache directory for RSS feeds

	define('MAGPIE_CACHE_AGE', getenv('TTRSS_MAGPIE_CACHE_AGE')); 
	// How long to store cached RSS objects? In seconds.
	// Defaults to 30 minutes

	define('ICONS_DIR', getenv('TTRSS_ICONS_DIR'));
	define('ICONS_URL', getenv('TTRSS_ICONS_URL'));
	// Local and URL path to the directory, where feed favicons are stored.
	// Unless you really know what you're doing, please keep those relative
	// to tt-rss main directory.

	define('SINGLE_USER_MODE', getenv('TTRSS_SINGLE_USER_MODE'));
	// Operate in single user mode, disables all functionality related to
	// multiple users.
	
	define('TMP_DIRECTORY', getenv('TTRSS_TMP_DIRECTORY'));
	// Directory for temporary files

	define('FEEDS_FRAME_REFRESH', getenv('TTRSS_FEEDS_FRAME_REFRESH'));
	// Auto refresh interval for feeds frame (in seconds)

	define('ENABLE_UPDATE_DAEMON', getenv('TTRSS_ENABLE_UPDATE_DAEMON'));
	// This enables different mechanism for user-triggered updates designed
	// for update daemon running in background on the server.
	// This option suggests FEEDS_FRAME_REFRESH set to a small value 
	// (like 60 seconds, depending on number of users and server/bandwidth load).

	define('DAEMON_SLEEP_INTERVAL', getenv('TTRSS_DAEMON_SLEEP_INTERVAL'));
	// Interval between update daemon update runs

	define('DATABASE_BACKED_SESSIONS', getenv('TTRSS_DATABASE_BACKED_SESSIONS'));
	// Store session information in a database, recommended for multiuser 
	// configurations. Doesn't seem to work for everyone, so enable with caution.
	// tt-rss uses default PHP session storing mechanism if disabled.

	define('SESSION_CHECK_ADDRESS', getenv('TTRSS_SESSION_CHECK_ADDRESS'));
	// Bind session to client IP address (recommended)

	define('SESSION_COOKIE_LIFETIME', getenv('TTRSS_SESSION_COOKIE_LIFETIME'));
	// Default lifetime of a session (e.g. login) cookie. In seconds, 
	// 0 means cookie will be deleted when browser closes.

	define('SESSION_EXPIRE_TIME', getenv('TTRSS_SESSION_EXPIRE_TIME'));
	// Hard expiration limit for sessions. Should be
	// greater or equal to SESSION_COOKIE_LIFETIME

	define('DAEMON_UPDATE_LOGIN_LIMIT', getenv('TTRSS_DAEMON_UPDATE_LOGIN_LIMIT'));
	// Stop updating feeds of user who haven't logged in specified 
	// amount of days. 0 disables.

	define('CHECK_FOR_NEW_VERSION', getenv('TTRSS_CHECK_FOR_NEW_VERSION'));
	// Check for new versions of tt-rss automatically.

	define('USE_CURL_FOR_ICONS', getenv('TTRSS_USE_CURL_FOR_ICONS'));
	// Fetch favicons using CURL, useful if your PHP has disabled remote fopen()

	define('DIGEST_ENABLE', getenv('TTRSS_DIGEST_ENABLE'));
	// Global option to enable daily digests

	define('DIGEST_EMAIL_LIMIT', getenv('TTRSS_DIGEST_EMAIL_LIMIT'));
	// The maximum amount of emails sent in one digest batch

	define('DAEMON_SENDS_DIGESTS', getenv('TTRSS_DAEMON_SENDS_DIGESTS'));
	// If update daemon and update_feeds should send digests
	// Disable if you prefer querying special URL (see wiki)

	define('ENABLE_TRANSLATIONS', getenv('TTRSS_ENABLE_TRANSLATIONS'));
	// Enable support for interface translations

	define('MYSQL_CHARSET', getenv('TTRSS_MYSQL_CHARSET'));
	// Connection charset for MySQL. Only enable if having charset-related
	// errors with MySQL (mangled characters, errors when updating feeds, etc).

	define('DEFAULT_UPDATE_METHOD', getenv('TTRSS_DEFAULT_UPDATE_METHOD'));
	// Which feed parsing library to use as default:
	// 0 - Magpie
	// 1 - SimplePie

	define('SIMPLEPIE_CACHE_DIR',	'/var/tmp/simplepie-ttrss-cache');
	// Cache directory for RSS feeds when using SimplePie

	define('SIMPLEPIE_CACHE_IMAGES', getenv('TTRSS_SIMPLEPIE_CACHE_IMAGES'));
	// Allow caching feed images when using SimplePie, to bypass hotlink
	// prevention and such at expense of local disk space and bandwidth.
	// Note that you (or your users) also have to enable image caching 
	// in feed editor.
	
	define('COUNTERS_MAX_AGE', getenv('TTRSS_COUNTERS_MAX_AGE'));
	// Hard limit for unread counters calculation. Try tweaking this
	// parameter to speed up tt-rss when having a huge number of articles
	// in the database (better yet, enable purging!)

	define('DIGEST_FROM_NAME', getenv('TTRSS_DIGEST_FROM_NAME'));
	define('DIGEST_FROM_ADDRESS', getenv('TTRSS_DIGEST_FROM_ADDRESS'));
	// Name, address and subject for sending outgoing mail. This applies
	// to password reset notifications, digest emails and any other mail.

	define('DIGEST_SUBJECT', getenv('TTRSS_DIGEST_SUBJECT'));
	// Subject line for email digests

	define('DIGEST_SMTP_HOST', getenv('TTRSS_DIGEST_SMTP_HOST'));
	// SMTP Host to send outgoing mail. Blank - use system MTA.

	define('DIGEST_SMTP_LOGIN', getenv('TTRSS_DIGEST_SMTP_LOGIN'));
	define('DIGEST_SMTP_PASSWORD', getenv('TTRSS_DIGEST_SMTP_PASSWORD'));
	// These two options enable SMTP authentication when sending
	// outgoing mail. Require DIGEST_SMTP_HOST.

	define('DAEMON_FEED_LIMIT', getenv('TTRSS_DAEMON_FEED_LIMIT'));
	// Limits the amount of feeds daemon (or a cronjob) updates on one run

	define('ALLOW_REMOTE_USER_AUTH', getenv('TTRSS_ALLOW_REMOTE_USER_AUTH'));
   // Set to 'true' if you trust your web server's REMOTE_USER
	// environment variable to validate that the user is logged in. This
	// option can be used to integrate tt-rss with Apache's external
	// authentication modules.

	define('LOCK_DIRECTORY', getenv('TTRSS_LOCK_DIRECTORY'));
	// Directory for lockfiles, must be writable to the user you run
	// daemon process or cronjobs under.

	define('ENABLE_GZIP_OUTPUT', getenv('TTRSS_ENABLE_GZIP_OUTPUT'));
	// Selectively gzip output to improve wire performance. This requires
	// PHP Zlib extension on the server.

	define('PHP_EXECUTABLE', getenv('TTRSS_PHP_EXECUTABLE'));
	// Path to PHP executable

	define('ENABLE_REGISTRATION', getenv('TTRSS_ENABLE_REGISTRATION'));
	// Allow users to register themselves. Please be vary that allowing
	// random people to access your tt-rss installation is a security risk
	// and potentially might lead to data loss or server exploit. Disabled
	// by default.

	define('REG_NOTIFY_ADDRESS', getenv('TTRSS_REG_NOTIFY_ADDRESS'));
	// Email address to send new user notifications to.

	define('REG_MAX_USERS', getenv('TTRSS_REG_MAX_USERS'));
	// Maximum amount of users which will be allowed to register on this
	// system. 0 - no limit.

	define('FEEDBACK_URL', getenv('TTRSS_FEEDBACK_URL'));
	// Displays an URL for users to provide feedback or comments regarding
	// this instance of tt-rss. Can lead to a forum, contact email, etc.

	define('FORCE_ARTICLE_PURGE', getenv('TTRSS_FORCE_ARTICLE_PURGE'));
	// When this option is not 0, users ability to control feed purging
	// intervals is disabled and all articles (which are not starred) 
	// older than this amount of days are purged.

	define('CONFIG_VERSION', getenv('TTRSS_CONFIG_VERSION'));
	// Expected config version. Please update this option in config.php
	// if necessary (after migrating all new options from this file).

	// vim:ft=php
	$snippets = glob(getenv("SCRIPT_ROOT")."/config.d/*.php");

	foreach ($snippets as $snippet) {
		require_once $snippet;
	}


	define('NGINX_XACCEL_PREFIX', '/tt-rss');
