<?php
/**
 /**
|--------------------------------------------------------------------------|
|   https://github.com/3evils/                                            |
|--------------------------------------------------------------------------|
|   Licence Info: WTFPL                                                    |
|--------------------------------------------------------------------------|
|   Copyright (C) 2019 Evil-Trinity                             |
|--------------------------------------------------------------------------|
|   A bittorrent tracker source based on an unreleased U-232.   |
|--------------------------------------------------------------------------|
|   Project Leaders: AntiMidas               |
|--------------------------------------------------------------------------|
_   _   _   _   ___Based on____     _   _   _   _
/ \ / \ / \ / \ / \   / \ / \ / \ / \ / \ / \   / \ / \ / \ / \
( U | - | 2 | 3 | 2 )-( S | o | u | r | c | e )-( C | o | d | e )
\_/ \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/
 */
if ($user['added'] == 0 OR $user['perms'] & bt_options::PERMS_STEALTH) $joindate = "{$lang['userdetails_na']}";
	else 
		$joindate = get_date($user['added'], '');
		$lastseen = $user["last_access"];
if ($lastseen == 0 OR $user['perms'] & bt_options::PERMS_STEALTH) $lastseen = "{$lang['userdetails_never']}";
	else {
		$lastseen = get_date($user['last_access'], '', 0, 1);
	}
$HTMLOUT.= "<div class='card large-3 columns'>
	<h4 class='subheader'>{$lang['userdetails_joined']}
	<span class='label primary float-right'>{$joindate}</span></h4>
</div>
<div class='card secondary large-3 columns'>
	<h4 class='subheader'>{$lang['userdetails_seen']}
	<span class='label primary float-right'>{$lastseen}</span></h4>
</div>";
//==end
// End Class
// End File
