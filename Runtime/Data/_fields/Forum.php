<?php
return array (
  0 => 'forum_id',
  1 => 'forum_cid',
  2 => 'forum_cid_ep',
  3 => 'forum_sid',
  4 => 'forum_uid',
  5 => 'forum_pid',
  6 => 'forum_title',
  7 => 'forum_content',
  8 => 'forum_up',
  9 => 'forum_down',
  10 => 'forum_reply',
  11 => 'forum_report',
  12 => 'forum_ip',
  13 => 'forum_addtime',
  14 => 'forum_status',
  15 => 'forum_istop',
  16 => 'forum_referer',
  '_autoinc' => true,
  '_pk' => 'forum_id',
  '_type' => 
  array (
    'forum_id' => 'mediumint(9) unsigned',
    'forum_cid' => 'mediumint(9)',
    'forum_cid_ep' => 'smallint(5)',
    'forum_sid' => 'tinyint(1)',
    'forum_uid' => 'mediumint(9)',
    'forum_pid' => 'mediumint(9)',
    'forum_title' => 'varchar(255)',
    'forum_content' => 'text',
    'forum_up' => 'mediumint(9)',
    'forum_down' => 'mediumint(9)',
    'forum_reply' => 'mediumint(9)',
    'forum_report' => 'mediumint(9)',
    'forum_ip' => 'varchar(20)',
    'forum_addtime' => 'int(11)',
    'forum_status' => 'tinyint(1)',
    'forum_istop' => 'tinyint(1)',
    'forum_referer' => 'varchar(150)',
  ),
);
?>