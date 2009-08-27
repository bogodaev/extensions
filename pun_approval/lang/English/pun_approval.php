<?php

if (!defined('FORUM')) die();

// Language definitions used in profile, users, options, moderate, register, groups
$lang_app_post = array(
	'No posts'					=> 'There are no unaproved posts since your last visit.',
	'Unp posts'					=> 'Unapproved posts',
	'Unp topics'				=> 'Unapproved topics',
	'Unp users'					=> 'Unapproved registrations',
	'Title'						=> 'Post approval',
	'Title users'				=> 'Users approval',
	'Approve'					=> 'Approve post',
	'Remove'					=> 'Remove post',
	'Sel post'					=> 'Select post',
	'Topics'					=> 'Topics',
	'Topic warning'				=> 'Your topic should be approved(moderated)',
	'warn'						=> 'This is section of unapproved posts.',
	'First topic'				=> 'Topics of this forum are in the process of approving',
	'See posts'					=> 'See all unapproved posts',
//viewtopic.php
	'time app'					=> 'Post was approved by %s',
//part features
	'name features part'		=> '<strong>%s.</strong> Post approval',
	'info features'				=> 'Information about this part',
	'text input'				=> 'Allow post approval after ',
	'name check features'		=> 'Show approval date',
	'info check features'		=> 'Enable or daisble show approval date',
	'send email features'		=> 'If there are unapproved posts then send email',
	'everytime'					=> 'Everytime',
	'every hour'				=> 'Every hour',
	'time to day'				=> 'Time to day',
	'time to week'				=> 'Time to week',
//forums.php
	'forum head'				=> 'Edit Post approval settings',
	'forum check'				=> 'Enable posts approval to this forum',
	'forum info'				=> 'This option will allow you to determine whether posts will be aproved or not.',
	'name check'				=> 'Posts approval',
//groups.php
	'legend checks'				=> 'Posts approval',
	'name check 1'				=> 'Allow post without approval',
	'name check 2'				=> 'Allow post approval',
//users section
	'No results'				=> 'There are no registered users since your last visit.',
	'Check user'				=> '',
	'Approve registration'		=> 'Approve registration',
	'Remove registration'		=> 'Remove registration',
	'Approve all'				=> 'Approve all',
	'Approve success'			=> 'Users approved is successfull and new user is added.',
	'Remove success'			=> 'Users removed is successfull.',
	'Approve not success'		=> 'Approve users is not success.',
	'Remove not success'		=> 'Users removed is not success.',
	'Show section'				=> 'Show unapproved registrations',
//settings -> features
	'users check name'			=> 'Allow registration approval',
	'users check value'			=> 'Enable approve new registrations',
//other page
	'name page'					=> 'Post approval',
	'no posts'					=> "There are no topics with unaproved posts\nsince your last visit.",
	'no topic'					=> 'No posts',
	'warning'					=> 'Your post should be approved(moderated)',
	'name 1 col'				=> 'Topic',
	'name 2 col'				=> 'Category',
	'name 3 col'				=> 'Replies',
	'name 4 col'				=> 'Last post',
	'table summary'				=> 'Topics in the %s forum.',
	'Post topic'				=> 'Post new topic',
	'Views'						=> 'Views',
	'Moved'						=> 'Topic moved',
	'Sticky'					=> '[Sticky]',
	'Empty forum'				=> '[ Forum is empty ]',
	'Never'						=> 'Never',
	'No topics'					=> 'No topics have been posted',
	'First topic nag'			=> 'Be the first to post a topic in this forum',
	'Guest post disabled'		=> 'Guests may not create new topics in this forum.',
	'You posted'				=> 'You have posted in this topic',
	'You posted indicator'		=> '&#183;&#160;',
	'Table summary mods'		=> 'Select which of the listed topics you would like to move, open, close or delete from the forum: ',
	'Permalink forum'			=> 'Permanent link to this forum.',
	'Forum login nag'			=> 'Guest posting is disabled. You must %s or %s to post a new topic.',
	'Moderate forum'			=> 'Moderate forum',
	'Mark forum read'			=> 'Mark forum as read',
	'New posts info'			=> 'Go to the first new post since your last visit.',
	'delete sev'				=> 'delete selected posts',
	'delete all'				=> 'delete all posts',
	'delete'					=> 'delete post',
	'app sev'					=> 'approve selected posts',
	'app all'					=> 'approve all posts',
	'approval'					=> 'approve post',
	'delete succesfull'			=> 'The selected posts have been successfully deleted.',
	'approve succesfull'		=> 'The selected posts have been successfully approved.',
	'select post'				=> 'Select post:',
	'topic redirect'			=> 'Post deleted. Redirecting ...',
	'topic red app'				=>	'Post approved. Redirecting ...',
	'show app posts'			=> 'Show unapproved posts',
//copyright from lang_topic
	'Topic by'					=> 'Topic by %s:',
	'Reply by'					=> 'Reply by %s:',
	'Post reply'				=> 'Post reply',
	'Topic closed'				=> 'Topic closed',
	'Guest reply disabled'		=> 'Guests may not reply to topics in this forum.',
	'Status'					=> 'Status:',
	'From'						=> 'From:',
	'Registered'				=> 'Registered:',
	'Note'						=> 'Note:',
	'Posts'						=> 'Posts:',
	'IP'						=> 'IP:',
	'Visit website'				=> '<span>%s\'s </span>Website',
	'Guest'						=> 'Guest',
	'Online'					=> 'Online',
	'Offline'					=> 'Offline',
	'Last edited'				=> 'Last edited by %s (%s)',
	'Report'					=> 'Report',
	'Delete'					=> 'Delete',
	'Delete topic'				=> 'Delete topic',
	'Edit'						=> 'Edit',
	'Quote'						=> 'Quote',
	'Cancel subscription'		=> 'Unsubscribe from topic',
	'Subscription'				=> 'Subscribe to topic',
	'Topic login nag'			=> 'Guest posting is disabled. You must %s or %s to post a reply.',
	'Quick post'				=> 'Quick post',
	'Avatar'					=> 'Avatar',
	'Post'						=> 'Post',
	'Cannot delete'				=> 'You cannot delete the first post',
	'Permalink post'			=> 'Permanent link to this post',
	'Permalink topic'			=> 'Permanent link to this topic',
	'Go to profile'				=> 'Go to %s\'s profile',
	'Move'						=> 'Move topic',
	'Open'						=> 'Open topic',
	'Close'						=> 'Close topic',
	'Unstick'					=> 'Unstick topic',
	'Stick'						=> 'Stick topic',
	'Delete posts'				=> 'Delete posts',
	'bann'						=> 'Bann to user',
//errors
	'Badly link argument'		=>	'The link you followed contains bad arguments.',
	'No db result from posts'	=>	'There are no unapproved posts.',
	'Error app topic'			=>	'Error in the table "post_approval_topics". There are no topics. Please reinstall extension.',
	'Post errors'				=>	'Warnings:',
);