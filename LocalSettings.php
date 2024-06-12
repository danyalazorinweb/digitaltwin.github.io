<?php
# This file was automatically generated by the MediaWiki 1.35.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in this file.
# Documentation:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

if ( getenv( 'MW_DB' ) ) {
    $wgDBtype = "mysql";
    $wgDBserver = "db";
    $wgDBname = "mediawiki";
    $wgDBuser = "wiki";
    $wgDBpassword = "DEP@ssw0rd";
}

$wgSitename = "MyWiki";
$wgMetaNamespace = "MyWiki";
$wgScriptPath = "";
$wgScriptExtension = ".php";

$wgServer = "http://localhost:8080";
$wgArticlePath = "/wiki/$1";

$wgEnableEmail = true;
$wgEnableUserEmail = true;
$wgEmergencyContact = "admin@example.com";
$wgPasswordSender = "admin@example.com";

$wgDBtype = "mysql";
$wgDBserver = "db";
$wgDBname = "mediawiki";
$wgDBuser = "wiki";
$wgDBpassword = "DEP@ssw0rd";

$wgDBprefix = "";

$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

$wgUploadPath = "$wgScriptPath/images";
$wgUploadDirectory = "$IP/images";
$wgUploadSizeWarning = 0;

$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

$wgShellLocale = "C.UTF-8";
$wgLanguageCode = "en";

$wgSecretKey = "random_string";

$wgUpgradeKey = "random_upgrade_key";

$wgDefaultSkin = "vector";

$wgRightsPage = "";
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

$wgResourceLoaderMaxQueryLength = -1;

$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

$wgEnableEmail = true;
$wgEnableUserEmail = true;
$wgEmergencyContact = "admin@example.com";
$wgPasswordSender = "admin@example.com";
