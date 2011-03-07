<?

setcookie("XDEBUG_PROFILE", 'test', time()-3600);
 
$manifest = array(
  'load_after'=>'db_session',
  'enabled'=>false
);