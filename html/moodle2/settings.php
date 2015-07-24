<?php

require_once(dirname(__FILE__) . '/local/agora/lib.php');

get_debug();

$dirroot = dirname(dirname(dirname(__FILE__)));

$CFG->altcacheconfigpath = $dirroot.'/html/moodle2/local/agora/muc/';

$CFG->langotherroot = dirname(__FILE__) . '/langpacks/';
$CFG->langlocalroot = dirname(__FILE__) . '/langpacks/';
$CFG->skiplangupgrade  = true;
$CFG->updateautocheck = false;
$CFG->disableupdatenotifications = true;
$CFG->disableupdateautodeploy = true;
$CFG->disableonclickaddoninstall = true;


$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->alternateloginurl = '';
$CFG->mymoodleredirect = 0;
$CFG->isagora = 0;
$CFG->iseoi = 0;
$CFG->isportal = 0;
$CFG->diskPercent = 0;
$CFG->disableupdatenotifications = 1;
$CFG->slasharguments = true;

$CFG->session_handler_class = '\core\session\file';
$CFG->session_file_save_path = ini_get('session.save_path');

//$CFG->apligestmail = 1;
//$CFG->apligestlog = 1;
//$CFG->apligestlogdebug = 1;
//$CFG->apligestlogpath = $CFG->dataroot.'/repository/files/mailsender.log';
$CFG->apligestaplic = 'ODISSEA';

$CFG->agora_muc_path = $dirroot.'/cache_ins';
$CFG->cachedir = $CFG->agora_muc_path.'/cache';
$CFG->localcachedir = $CFG->agora_muc_path.'/localcache';

// Change locking from NFS to DB
$CFG->lock_factory = "\\core\\lock\\db_record_lock_factory";

$CFG->mobilecssurl = $CFG->wwwroot.'/theme/xtec2/mobile/style.php';

$CFG->forced_plugin_settings = array('block_configurable_reports' => array(
                                        'sqlsecurity' => true,
                                        'dbhost' => "",
                                        'dbname' => "",
                                        'dbuser' => "",
                                        'dbpass' => ""),
                                     'logstore_legacy' => array('loglegacy' => 1),
                                     'filter_wiris' => array('uninstall' => 1));