<?php

session_regenerate_id();
session_destroy();
header('Location: /art-page-folder/prosto-registracia/index.php');
exit;