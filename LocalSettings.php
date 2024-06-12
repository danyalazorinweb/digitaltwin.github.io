<?php
# This is a simplified configuration for MediaWiki

# Database settings
$wgDBtype = "mysql";
$wgDBserver = "db";
$wgDBname = "mediawiki";
$wgDBuser = "wiki";
$wgDBpassword = "DEP@ssw0rd";

# Site settings
$wgSitename = "MediaWiki";
$wgMetaNamespace = "MediaWiki";

# Path settings
$wgScriptPath = "";
$wgServer = "http://localhost:8080";
$wgArticlePath = "/wiki/$1";

# Upload settings
$wgEnableUploads = true;

# Secret key
$wgSecretKey = "random_string";

# Rights
$wgRightsPage = "";
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Enable email settings
$wgEnableEmail = true;
$wgEnableUserEmail = true;
$wgEmergencyContact = "admin@example.com";
$wgPasswordSender = "admin@example.com";

# Default skin
$wgDefaultSkin = "vector";
