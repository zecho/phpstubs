<?php

class GearmanClient
{
  /* Methods */

  /**
   * Add client options
   * 
   * @param int $options 
   * 
   * @return  bool
   */
  public function addOptions($options)
  {
    
  }

  /**
   * Add a job server to the client
   * 
   * @param string $host
   * @param int $port
   * 
   * @return  bool
   */
  public function addServer($host = '127.0.0.1', $port = 4730)
  {
    
  }

  /**
   * Add a list of job servers to the client
   * 
   * @param string $servers
   * 
   * @return  bool
   */
  public function addServers($servers = '127.0.0.1:4730')
  {
    
  }

  /**
   * Add a task to be run in parallel
   * 
   * @param string $function_name
   * @param string $workload
   * @param $context
   * @param string $unique
   * 
   * @return  GearmanTask
   */
  public function addTask($function_name, $workload, &$context, $unique)
  {
    
  }

  /**
   * Add a background task to be run in parallel
   * 
   * @return  GearmanTask
   */
  public function addTaskBackground(string $function_name, string $workload, mixed &$context, string $unique)
  {
    
  }

  /**
   * Add a high priority task to run in parallel
   * 
   * @return  GearmanTask
   */
  public function addTaskHigh(string $function_name, string $workload, mixed &$context, string $unique)
  {
    
  }

  /**
   * Add a high priority background task to be run in parallel
   * 
   * @return  GearmanTask
   */
  public function addTaskHighBackground(string $function_name, string $workload, mixed &$context, string $unique)
  {
    
  }

  /**
   * Add a low priority task to run in parallel
   * 
   * @return  GearmanTask
   */
  public function addTaskLow(string $function_name, string $workload, mixed &$context, string $unique)
  {
    
  }

  /**
   * Add a low priority background task to be run in parallel
   * 
   * @return  GearmanTask
   */
  public function addTaskLowBackground(string $function_name, string $workload, mixed &$context, string $unique)
  {
    
  }

  /**
   * Add a task to get status
   * 
   * @return  GearmanTask
   */
  public function addTaskStatus(string $job_handle, string &$context)
  {
    
  }

  /**
   * Clear all task callback functions
   * 
   * @return  bool
   */
  public function clearCallbacks()
  {
    
  }

  /**
   * Create a copy of a GearmanClient object
   * 
   * @return  GearmanClient
   */
  public function __clone()
  {
    
  }

  /**
   * Create a GearmanClient instance
   */
  public function __construct()
  {
    
  }

  /**
   * Get the application context
   * 
   * @return  string
   */
  public function context()
  {
    
  }

  /**
   * Get the application data (deprecated)
   * @deprecated
   * 
   * @return  string
   */
  public function data()
  {
    
  }
  /**
   * Run a single task and return a result
   * 
   * @return  string
   */
  //REMOVED AS RESERVED WORD!!! public function do( string $function_name, string $workload, string $unique ){}

  /**
   * Run a task in the background
   * 
   * @param string $function_name
   * @param string $workload
   * @param string $unique 
   */
  public function doBackground($function_name, $workload, $unique)
  {
    
  }

  /**
   * Run a single high priority task
   * 
   * @param string $function_name
   * @param string $workload
   * @param string $unique 
   * 
   * @return string
   */
  public function doHigh(string $function_name, string $workload, string $unique)
  {
    
  }

  /**
   * Run a high priority task in the background
   * 
   * @param string $function_name
   * @param string $workload
   * @param string $unique 
   * 
   * @return string
   */
  public function doHighBackground(string $function_name, string $workload, string $unique)
  {
    
  }

  /**
   * Get the job handle for the running task
   * 
   * @return  string
   */
  public function doJobHandle()
  {
    
  }

  /**
   * Run a single low priority task
   * 
   * @param string $function_name
   * @param string $workload 
   * @param string $unique
   * 
   * @return  string
   */
  public function doLow($function_name, $workload, $unique)
  {
    
  }

  /**
   * Run a low priority task in the background
   * 
   * @param string $function_name
   * @param string $workload
   * @param string $unique
   * 
   * @return  string
   */
  public function doLowBackground(string $function_name, string $workload, string $unique)
  {
    
  }

  /**
   * @return  array
   */
  public function doStatus()
  {
    
  }

  /**
   * @return  string
   */
  public function error()
  {
    
  }

  /**
   * @return  int
   */
  public function getErrno()
  {
    
  }

  /**
   *
   * @param string $job_handle 
   * 
   * @return  array
   */
  public function jobStatus($job_handle)
  {
    
  }

  /**
   *
   * @param int $options 
   * 
   * @return  bool
   */
  public function removeOptions($options)
  {
    
  }

  /**
   * @return  int
   */
  public function returnCode()
  {
    
  }

  /**
   * @return  bool
   */
  public function runTasks()
  {
    
  }

  /**
   *
   * @param callback $callback 
   * 
   * @return  bool
   */
  public function setClientCallback($callback)
  {
    
  }

  /**
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setCompleteCallback($callback)
  {
    
  }

  /**
   * @param string $context
   * 
   * @return  bool
   */
  public function setContext($context)
  {
    
  }

  /**
   * @param string $callback
   * 
   * @return  bool
   */
  public function setCreatedCallback($callback)
  {
    
  }

  /**
   * @param string $data
   * 
   * @return  bool
   */
  public function setData($data)
  {
    
  }

  /**
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setDataCallback($callback)
  {
    
  }

  /**
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setExceptionCallback($callback)
  {
    
  }

  /**
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setFailCallback($callback)
  {
    
  }

  /**
   * @param int $options
   * 
   * @return  bool
   */
  public function setOptions($options)
  {
    
  }

  /**
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setStatusCallback($callback)
  {
    
  }

  /**
   * @param int $timeout
   * 
   * @return  bool
   */
  public function setTimeout($timeout)
  {
    
  }

  /**
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setWarningCallback($callback)
  {
    
  }

  /**
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setWorkloadCallback($callback)
  {
    
  }

  /**
   * @return  int
   */
  public function timeout()
  {
    
  }
}
