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
//==Temp demotion
if ($CURUSER['override_class'] != 255 && $CURUSER) // Second condition needed so that this box isn't displayed for non members/logged out members.
{
    $htmlout.= "<li>
<a class='sa-tooltip' href='./restoreclass.php'><b class='btn btn-warning btn-sm'>{$lang['gl_temp_demotion']}</b>
<span class='custom info alert alert-warning'><em>{$lang['gl_temp_demotion1']}</em>   
{$lang['gl_temp_demotion2']}</span></a></li>";
}
//==End
// End Class
// End File

