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
function docleanup($data)
{
    global $INSTALLER09, $queries, $mc1;
    set_time_limit(1200);
    ignore_user_abort(1);
    // Remove expired readposts...
    $dt = TIME_NOW - $INSTALLER09["readpost_expiry"];
    sql_query('DELETE read_posts FROM read_posts LEFT JOIN posts ON read_posts.last_post_read = posts.id WHERE posts.added < '.sqlesc($dt)) or sqlerr(__FILE__, __LINE__);
    // Remove expired readposts... Multilayer
    //$dt = TIME_NOW - $INSTALLER09["readpost_expiry"];
    //sql_query('DELETE readposts FROM readposts LEFT JOIN posts ON readposts.lastpostread = posts.id WHERE posts.added < '.sqlesc($dt)) or sqlerr(__FILE__, __LINE__);
    if ($queries > 0) write_log("Readpost Clean -------------------- Readpost cleanup Complete using $queries queries --------------------");
    if (false !== mysqli_affected_rows($GLOBALS["___mysqli_ston"])) {
        $data['clean_desc'] = mysqli_affected_rows($GLOBALS["___mysqli_ston"]) . " items deleted/updated";
    }
    if ($data['clean_log']) {
        cleanup_log($data);
    }
}
?>
