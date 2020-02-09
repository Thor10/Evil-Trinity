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
function rsstfreakinfo() {
    global $INSTALLER09;
    $html = '';
    $use_limit = true;
    $limit = 5;
    $xml = file_get_contents('http://feed.torrentfreak.com/Torrentfreak/');
   	$html ='';
    $icount = 1;
    $doc = new DOMDocument();
    @$doc->loadXML($xml);
    $items = $doc->getElementsByTagName('item');
    foreach ($items as $item) {
        $html.= '<h3><u>' . $item->getElementsByTagName('title')->item(0)->nodeValue . '</u></h3><font class="small">by ' . str_replace(array('<![CDATA[', ']]>'), '', $item->getElementsByTagName('creator')->item(0)->nodeValue) . ' on ' . $item->getElementsByTagName('pubDate')->item(0)->nodeValue . '</font><br />' . str_replace(array('<![CDATA[', ']]>'), '', $item->getElementsByTagName('description')->item(0)->nodeValue) . '<br /><a href="' . $item->getElementsByTagName('link')->item(0)->nodeValue . '" target="_blank"><span class=" btn btn-primary">Read more</span></a>';
        if ($use_limit && $icount == $limit) break;
        $icount++;
    }
    $html = str_replace(array('“','”'), '"', $html);
    $html = str_replace(array("’","‘", "‘"), "'", $html);
    $html = str_replace("–", "-", $html);
    //$html.='';
    return $html;
}
?>
