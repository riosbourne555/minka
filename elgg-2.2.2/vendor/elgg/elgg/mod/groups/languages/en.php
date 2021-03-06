<?php
return array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Groups",
	'groups:owned' => "Groups I own",
	'groups:owned:user' => 'Groups %s owns',
	'groups:yours' => "My groups",
	'groups:user' => "%s's groups",
	'groups:all' => "All groups",
	'groups:add' => "Create a new group",
	'groups:edit' => "Edit group",
	'groups:delete' => 'Delete group',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitations' => 'Group invitations',
	'groups:invitations:pending' => 'Group invitations (%s)',

	'groups:icon' => 'Group icon (leave blank to leave unchanged)',
	'groups:name' => 'Group name',
	'groups:username' => 'Group short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description',
	'groups:briefdescription' => 'Brief description',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Group members',
	'groups:my_status' => 'My status',
	'groups:my_status:group_owner' => 'You own this group',
	'groups:my_status:group_member' => 'You are in this group',
	'groups:subscribed' => 'Group notifications are on',
	'groups:unsubscribed' => 'Group notifications are off',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "Group membership permissions",
	'groups:content_access_mode' => "Accessibility of group content",
	'groups:content_access_mode:warning' => "Warning: Changing this setting won't change the access permission of existing group content.",
	'groups:content_access_mode:unrestricted' => "Unrestricted - Access depends on content-level settings",
	'groups:content_access_mode:membersonly' => "Members Only - Non-members can never access group content",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this group.",
	'groups:widget:num_display' => 'Number of groups to display',
	'groups:widget:membership' => 'Group membership',
	'groups:widgets:description' => 'Display the groups you are a member of on your profile',

	'groups:widget:group_activity:title' => 'Group activity',
	'groups:widget:group_activity:description' => 'View the activity in one of your groups',
	'groups:widget:group_activity:edit:select' => 'Select a group',
	'groups:widget:group_activity:content:noactivity' => 'There is no activity in this group',
	'groups:widget:group_activity:content:noselect' => 'Edit this widget to select a group',

	'groups:noaccess' => 'No access to group',
	'groups:ingroup' => 'in the group',
	'groups:cantcreate' => 'You can not create a group. Only admins can.',
	'groups:cantedit' => 'You can not edit this group',
	'groups:saved' => 'Group saved',
	'groups:save_error' => 'Group could not be saved',
	'groups:featured' => 'Featured groups',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured group.',
	'groups:unfeatured' => '%s has been removed from the featured groups.',
	'groups:featured_error' => 'Invalid group.',
	'groups:nofeatured' => 'No featured groups',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join group',
	'groups:leave' => 'Leave group',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this group',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this group.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viagroups' => "via groups",
	'groups:group' => "Group",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for groups tagged with '%s'",
	'groups:search:none' => "No matching groups were found",
	'groups:search_in_group' => "Search in this group",
	'groups:acl' => "Group: %s",

	'groups:activity' => "Group activity",
	'groups:enableactivity' => 'Enable group activity',
	'groups:activity:none' => "There is no group activity yet",

	'groups:notfound' => "Group not found",
	'groups:notfound:details' => "The requested group either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'groups:count' => "groups created",
	'groups:open' => "open group",
	'groups:closed' => "closed group",
	'groups:member' => "members",
	'groups:searchtag' => "Search for groups by tag",

	'groups:more' => 'More groups',
	'groups:none' => 'No groups',

	/**
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => 'Group members only',
	'groups:closedgroup' => "This group's membership is closed.",
	'groups:closedgroup:request' => 'To ask to be added, click the "Request membership" menu link.',
	'groups:closedgroup:membersonly' => "This group's membership is closed and its content is accessible only by members.",
	'groups:opengroup:membersonly' => "This group's content is accessible only by members.",
	'groups:opengroup:membersonly:join' => 'To be a member, click the "Join group" menu link.',
	'groups:visibility' => 'Who can see this group?',

	/**
	 * Group tools
	 */
	'groups:lastupdated' => 'Last updated %s by %s',
	'groups:lastcomment' => 'Last comment %s by %s',

	'admin:groups' => 'Groups',

	'groups:privategroup' => 'This group is closed. Requesting membership.',
	'groups:notitle' => 'Groups must have a title',
	'groups:cantjoin' => 'Can not join group',
	'groups:cantleave' => 'Could not leave group',
	'groups:removeuser' => 'Remove from group',
	'groups:cantremove' => 'Cannot remove user from group',
	'groups:removed' => 'Successfully removed %s from group',
	'groups:addedtogroup' => 'Successfully added the user to the group',
	'groups:joinrequestnotmade' => 'Could not request to join group',
	'groups:joinrequestmade' => 'Requested to join group',
	'groups:joined' => 'Successfully joined group!',
	'groups:left' => 'Successfully left group',
	'groups:notowner' => 'Sorry, you are not the owner of this group.',
	'groups:notmember' => 'Sorry, you are not a member of this group.',
	'groups:alreadymember' => 'You are already a member of this group!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' group. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s group!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' group! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' group. Click below to view their profile:

%s

or click below to view the group's join requests:

%s",

	/**
	 * Forum river items
	 */

	'river:create:group:default' => '%s created the group %s',
	'river:join:group:default' => '%s joined the group %s',

	'groups:nowidgets' => 'No widgets have been defined for this group.',


	'groups:widgets:members:title' => 'Group members',
	'groups:widgets:members:description' => 'List the members of a group.',
	'groups:widgets:members:label:displaynum' => 'List the members of a group.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in group",
	'groups:widgets:entities:description' => "List the objects saved in this group",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) groups?',
	'groups:whocancreate' => 'Who can create new groups?',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Group and group contents deleted',
	'group:notdeleted' => 'Group could not be deleted',

	'group:notfound' => 'Could not find the group',
	'groups:deletewarning' => "Are you sure you want to delete this group? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',
	'groups:error:addedtogroup' => "Could not add %s to the group",
	'groups:add:alreadymember' => "%s is already a member of this group",

	/**
	 * ecml
	 */
	'groups:ecml:groupprofile' => 'Group profiles',
);
