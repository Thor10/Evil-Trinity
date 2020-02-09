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
// Announcement Code...
$ann_subject = trim($CURUSER['curr_ann_subject']);
$ann_body = trim($CURUSER['curr_ann_body']);
if ((!empty($ann_subject)) AND (!empty($ann_body)))
   {
   $HTMLOUT .= "<div class='card'>
	<div class='card-divider portlet-header'>{$lang['index_announce']}</div>
<div class='portlet-content card-section'>
			<table class='table striped'>
				<tr>
					<td><b><font color='red'>{$lang['index_ann_title']}&nbsp;: " . htmlsafechars($ann_subject) . "</font></b></td>
				</tr>
				<tr>
					<td>" . format_comment($ann_body) . "<br /><hr /><br />   {$lang['index_ann_click']}<a href='{$INSTALLER09['baseurl']}/clear_announcement.php'>
					<i><b>{$lang['index_ann_here']}</b></i></a>{$lang['index_ann_clear']}</td>
				</tr>
			</table>
		</div>
		</div>";
   }
//==End
// End Class
// End File
