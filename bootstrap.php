<?
global $profile_status;

if(isset($_COOKIE["XDEBUG_PROFILE"]))
{
  $profile_status='Profiling is enabled. The site may be slow.';
}
else
{
  $profile_status='Profiling is being enabled and will begin tracking on future requests. The site may be slow.';
}
setcookie("XDEBUG_PROFILE", 'test');
