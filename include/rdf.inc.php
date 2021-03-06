<?php
// $Id: rdf.inc.php,v 1.2 2007/10/22 02:46:16 ohwada Exp $

// 2007-10-10 K.OHWADA
// build()
// remove cache_time

// 2007-05-12 K.OHWADA
// module dupulication
// move from whatsnew/rdf.php

//=========================================================
// What's New Module
// 2005.05.12 hoshiyan <http://www.hoshiba-farm.com/>
//=========================================================

if( !defined('WHATSNEW_DIRNAME') )
{
	$WEBLINKS_DIRNAME = basename( dirname( dirname( __FILE__ ) ) );
	define('WHATSNEW_DIRNAME', $WEBLINKS_DIRNAME );
}

include_once XOOPS_ROOT_PATH . '/modules/' . WHATSNEW_DIRNAME . '/api/api_rss.php';

$whatsnew_builder =& whatsnew_rss_builder::getInstance( WHATSNEW_DIRNAME );
$whatsnew_builder->build( 'rdf' );

?>