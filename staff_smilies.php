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
$count = 0;
$ctr = 0;
global $staff_smilies;
	while ((list($code, $url) = each($staff_smilies))) {
		if ($count % 20 == 0) $HTMLOUT.= "<p>";
		$HTMLOUT.= "     <a href=\"javascript: SmileIT('" . str_replace("'", "\'", $code) . "','shbox','shbox_text')\" aria-label='Dismiss alert' data-close><img src='./pic/smilies/" . $url . "' alt='' /></a>     ";
		$count++;
		if ($count % 20 == 0) $HTMLOUT.= "</p>";
	}
?>
