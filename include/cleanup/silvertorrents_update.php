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
    set_time_limit(0);
    ignore_user_abort(1);
    //=== Clean silver
    $res = sql_query("SELECT id, silver FROM torrents WHERE silver > 1 AND silver < " . TIME_NOW) or sqlerr(__FILE__, __LINE__);
    $Silver_buffer = array();
    if (mysqli_num_rows($res) > 0) {
        while ($arr = mysqli_fetch_assoc($res)) {
            $Silver_buffer[] = '(' . $arr['id'] . ', \'0\')';
            $mc1->begin_transaction('torrent_details_' . $arr['id']);
            $mc1->update_row(false, array(
                'silver' => 0
            ));
            $mc1->commit_transaction($INSTALLER09['expires']['torrent_details']);
        }
        $count = count($Silver_buffer);
        if ($count > 0) {
            sql_query("INSERT INTO torrents (id, silver) VALUES " . implode(', ', $Silver_buffer) . " ON DUPLICATE key UPDATE silver=values(silver)") or sqlerr(__FILE__, __LINE__);
            write_log("Cleanup - Removed Silver from " . $count . " torrents");
        }
        unset($Silver_buffer, $count);
    }
    //==End
    if ($queries > 0) write_log("Free clean-------------------- Silver Torrents cleanup Complete using $queries queries --------------------");
    if (false !== mysqli_affected_rows($GLOBALS["___mysqli_ston"])) {
        $data['clean_desc'] = mysqli_affected_rows($GLOBALS["___mysqli_ston"]) . " items updated";
    }
    if ($data['clean_log']) {
        cleanup_log($data);
    }
}
?>
