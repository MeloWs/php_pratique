<?php
$i = 0;
class User 
{
  private static $_userName;
  private static $_userLastname;
  private static $_userEmail;

  public function __construct($userName, $userLastname, $userEmail)
  {
    self::$_userName = $userName;
    self::$_userLastname = $userLastname;
    self::$_userEmail = $userEmail;
  }
  public function __destruct()
  {
    
  }
  public function getInfoUser()
  {
    return ["userName" => self::$_userName, "userLastname" => self::$_userLastname, "userEmail" => self::$_userEmail];
  }
  public static function updateInfo($userName = null, $userLastname = null, $userEmail = null)
  {
    if($userName != null)
    {
      self::$_userName = $userName;
    }
    if($userLastname != null)
    {
      self::$_userLastname = $userLastname;
    }
    if($userEmail != null)
    {
      self::$_userEmail = $userEmail;
    }
    return ["userName" => self::$_userName, "userLastname" => self::$_userLastname, "userEmail" => self::$_userEmail];
  }
}
?>