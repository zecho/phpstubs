<?php

class GearmanWorker
{

  /**
   * Constructor
   * */
  public function __construct()
  {
    
  }

  /**
   * @param string $function_name
   * @param callback $function
   * @param mixed &$context
   * @param int $timeout
   * 
   * @return bool
   */
  public function addFunction($function_name, $function, &$context, $timeout)
  {
    
  }

  /**
   * @param int $option
   * 
   * @return bool
   */
  public function addOptions($option)
  {
    
  }

  /**
   * @param string $host
   * @param int $port
   * 
   * @return bool
   */
  public function addServer($host = '127.0.0.1', $port = 4730)
  {
    
  }

  /**
   * @param string $servers
   * 
   * @return bool
   */
  public function addServers($servers = '127.0.0.1:4730')
  {
    
  }

  /**
   * @return string
   */
  public function error()
  {
    
  }

  /**
   * @return int
   */
  public function getErrno()
  {
    
  }

  /**
   * @return int
   */
  public function options()
  {
    
  }

  /**
   * @param string $function_name
   * @param int $timeout
   * 
   * @return bool
   */
  public function register($function_name, $timeout)
  {
    
  }

  /**
   * @param int $option
   * 
   * @return bool
   */
  public function removeOptions($option)
  {
    
  }

  /**
   * @return int
   */
  public function returnCode()
  {
    
  }

  /**
   * @param int $option
   * 
   * @return bool
   */
  public function setOptions($option)
  {
    
  }

  /**
   * @param int $timeout
   * 
   * @return bool
   */
  public function setTimeout($timeout)
  {
    
  }

  /**
   * @return int
   */
  public function timeout()
  {
    
  }

  /**
   * @param string $function_name
   * 
   * @return bool
   */
  public function unregister($function_name)
  {
    
  }

  /**
   * @return bool
   */
  public function unregisterAll()
  {
    
  }

  /**
   * @return bool
   */
  public function wait()
  {
    
  }

  /**
   * @return bool
   */
  public function work()
  {
    
  }
}
