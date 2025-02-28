<?php
session_save_path('./logs');

session_name('Nguyen Nhat Tu');

if (empty(session_id())){
    session_start();
}

//$_SESSION['username'] = 'Nhat Tu';
//$_SESSION['fullname'] = 'Hello';

//Update session
$_SESSION['username'] = 'Học PHP';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

