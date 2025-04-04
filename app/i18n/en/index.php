<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'about' => array(
		'_' => 'About',
		'agpl3' => '<a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL 3</a>',
		'bug_reports' => array(
			'environment_information' => array(
				'_' => 'System information',	// TODO
				'browser' => 'Browser',	// TODO
				'database' => 'Database',	// TODO
				'server_software' => 'Server software',	// TODO
				'version_frss' => 'FreshRSS version',	// TODO
				'version_php' => 'PHP version',	// TODO
			),
		),
		'bugs_reports' => 'Bug reports',
		'credits' => 'Credits',
		'credits_content' => 'Some design elements come from <a href="http://twitter.github.io/bootstrap/">Bootstrap</a> although FreshRSS doesn’t use this framework. <a href="https://gitlab.gnome.org/Archive/gnome-icon-theme-symbolic">Icons</a> come from the <a href="https://www.gnome.org/">GNOME project</a>. <em>Open Sans</em> font police has been created by <a href="https://fonts.google.com/specimen/Open+Sans">Steve Matteson</a>. FreshRSS is based on <a href="https://framagit.org/marienfressinaud/MINZ">Minz</a>, a PHP framework.',
		'documentation' => 'Documentation',
		'freshrss_description' => 'FreshRSS is a self-hostable RSS aggregator and reader. It allows you to read and follow several news websites at a glance without the need to browse from one website to another. FreshRSS is lightweight, configurable, and easy to use.',
		'github' => '<a href="https://github.com/FreshRSS/FreshRSS/issues">on GitHub</a>',
		'license' => 'License',
		'project_website' => 'Project website',
		'title' => 'About',
		'version' => 'Version',
	),
	'feed' => array(
		'empty' => 'There are no articles to show.',
		'received' => array(
			'before_yesterday' => 'Received before yesterday',
			'today' => 'Received today',
			'yesterday' => 'Received yesterday',
		),
		'rss_of' => 'RSS feed of %s',
		'title' => 'Main stream',
		'title_fav' => 'Favourites',
		'title_global' => 'Global view',
	),
	'log' => array(
		'_' => 'Logs',
		'clear' => 'Clear the logs',
		'empty' => 'Log file is empty',
		'title' => 'Logs',
	),
	'menu' => array(
		'about' => 'About FreshRSS',
		'before_one_day' => 'Older than one day',
		'before_one_week' => 'Older than one week',
		'bookmark_query' => 'Bookmark current query',
		'favorites' => 'Favourites (%s)',
		'global_view' => 'Global view',
		'important' => 'Important feeds',
		'main_stream' => 'Main stream',
		'mark_all_read' => 'Mark all as read',
		'mark_cat_read' => 'Mark category as read',
		'mark_feed_read' => 'Mark feed as read',
		'mark_selection_unread' => 'Mark selection as unread',
		'mylabels' => 'My labels',
		'newer_first' => 'Newer first',
		'non-starred' => 'Show non-favourites',
		'normal_view' => 'Normal view',
		'older_first' => 'Oldest first',
		'queries' => 'User queries',
		'read' => 'Show read',
		'reader_view' => 'Reading view',
		'rss_view' => 'RSS feed',
		'search_short' => 'Search',
		'sort' => array(
			'_' => 'Sorting criteria',
			'date_asc' => 'Publication date 1→9',
			'date_desc' => 'Publication date 9→1',
			'id_asc' => 'Freshly received last',
			'id_desc' => 'Freshly received first',
			'link_asc' => 'Link A→Z',
			'link_desc' => 'Link Z→A',
			'rand' => 'Random order',
			'title_asc' => 'Title A→Z',
			'title_desc' => 'Title Z→A',
		),
		'starred' => 'Show favourites',
		'stats' => 'Statistics',
		'subscription' => 'Subscription management',
		'unread' => 'Show unread',
	),
	'share' => 'Share',
	'tag' => array(
		'related' => 'Article tags',
	),
	'tos' => array(
		'title' => 'Terms of Service',
	),
);
