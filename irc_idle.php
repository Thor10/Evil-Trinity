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
//irc idle thingy using php
$key = 'VGhlIE1vemlsbGEgZmFtaWx5IGFwcG';
$vars = array(
    'ircidle' => '',
    'username' => '',
    'key' => '',
    'do' => ''
);
foreach ($vars as $k => $v) $vars[$k] = isset($_GET[$k]) ? $_GET[$k] : '';
if ($key !== $vars['key'] || empty($vars['username'])) die('hmm something looks odd');
require_once (__DIR__ . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'bittorrent.php');
dbconn();
switch ($vars['do']) {
case 'check':
    $q = sql_query('SELECT id FROM users WHERE username = ' . sqlesc($vars['username']) . ' or altnick = '.sqlesc($vars['username']));
    echo (mysqli_num_rows($q));
    break;

case 'idle':
    sql_query("UPDATE users SET onirc = " . sqlesc(!$vars['ircidle'] ? 'no' : 'yes') . " where username = " . sqlesc($vars['username']));
    echo (mysqli_affected_rows($GLOBALS["___mysqli_ston"]));
    break;

default:
    die('hmm something looks odd again');
}
die;
?>
