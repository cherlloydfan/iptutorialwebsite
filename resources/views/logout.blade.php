<?php
session_start();
session_destroy();

return Redirect::to('login');
?>