<?php

# Этот файл создан MediaWiki при установке.
# Для получения дополнительной информации обратитесь к:
# https://www.mediawiki.org/wiki/Manual:LocalSettings.php

# Смотри https://www.mediawiki.org/wiki/Manual:Configuration_manual для полного списка настроек и их значения

$wgSitename = "MyWiki";
$wgMetaNamespace = "MyWiki";

$wgScriptPath = "/mediawiki";
$wgScriptExtension = ".php";

$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;

# Database settings
$wgDBtype = "mysql";
$wgDBserver = "db";
$wgDBname = "mediawiki";
$wgDBuser = "wiki";
$wgDBpassword = "DEP@ssw0rd";

# Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

# Enable upload support
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# ... другие настройки ...

# Конец LocalSettings.php
