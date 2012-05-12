<?php

/**
 * @author MWH Team
 * @copyright 2011
 */

require 'core.inc.php';
session_destroy();
header('Location: '.referrer());

?>