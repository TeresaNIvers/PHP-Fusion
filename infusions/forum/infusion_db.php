<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: infusion_db.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("FORUM_LOCALE")) {
    if (file_exists(INFUSIONS."forum/locale/".LOCALESET."forum.php")) {
        define("FORUM_LOCALE", INFUSIONS."forum/locale/".LOCALESET."forum.php");
    } else {
        define("FORUM_LOCALE", INFUSIONS."forum/locale/English/forum.php");
    }
}

if (!defined("FORUM_ADMIN_LOCALE")) {
    if (file_exists(INFUSIONS."forum/locale/".LOCALESET."forum_admin.php")) {
        define("FORUM_ADMIN_LOCALE", INFUSIONS."forum/locale/".LOCALESET."forum_admin.php");
    } else {
        define("FORUM_ADMIN_LOCALE", INFUSIONS."forum/locale/English/forum_admin.php");
    }
}

if (!defined("SETTINGS_LOCALE")) {
    if (file_exists(LOCALE.LOCALESET."admin/settings.php")) {
        define("SETTINGS_LOCALE", LOCALE.LOCALESET."admin/settings.php");
    } else {
        define("SETTINGS_LOCALE", LOCALE."English/admin/settings.php");
    }
}

if (!defined("FORUM_RANKS_LOCALE")) {
    if (file_exists(INFUSIONS."forum/locale/".LOCALESET."forum_ranks.php")) {
        define("FORUM_RANKS_LOCALE", INFUSIONS."forum/locale/".LOCALESET."forum_ranks.php");
    } else {
        define("FORUM_RANKS_LOCALE", INFUSIONS."forum/locale/English/forum_ranks.php");
    }
}

if (!defined("FORUM_TAGS_LOCALE")) {
    if (file_exists(INFUSIONS."forum/locale/".LOCALESET."forum_tags.php")) {
        define("FORUM_TAGS_LOCALE", INFUSIONS."forum/locale/".LOCALESET."forum_tags.php");
    } else {
        define("FORUM_TAGS_LOCALE", INFUSIONS."forum/locale/English/forum_tags.php");
    }
}

if (!defined("DB_FORUM_TAGS")) {
    define("DB_FORUM_TAGS", DB_PREFIX."forum_thread_tags");
}

if (!defined("DB_FORUM_MOODS")) {
    define("DB_FORUM_MOODS", DB_PREFIX."forum_post_mood");
}

if (!defined("DB_POST_NOTIFY")) {
    define("DB_POST_NOTIFY", DB_PREFIX."forum_post_notify");
}


if (!defined("FORUM_CLASS")) {
    define("FORUM_CLASS", INFUSIONS."forum/classes/");
}
if (!defined("FORUM_SECTIONS")) {
    define("FORUM_SECTIONS", INFUSIONS."forum/sections/");
}
if (!defined("FORUM_TEMPLATES")) {
    define("FORUM_TEMPLATES", INFUSIONS."forum/templates/");
}