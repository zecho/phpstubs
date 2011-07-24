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
   * Get the status for the running task
   * 
   * @return  array
   */
  public function doStatus()
  {
    
  }
  /**
   * Send data to all job servers to see if they echo it back
   * //COMMENTED AS RESERVED WORD!!! 
   */
//  public function 'echo'() {
//  
//  }

  /**
   * Returns an error string for the last error encountered
   * 
   * @return  string
   */
  public function error()
  {
    
  }

  /**
   * Get an errno value
   * 
   * @return  int
   */
  public function getErrno()
  {
    
  }

  /**
   * Get the status of a background job
   * 
   * @param string $job_handle 
   * 
   * @return  array
   */
  public function jobStatus($job_handle)
  {
    
  }

  /**
   * Remove client options
   * 
   * @param int $options 
   * 
   * @return  bool
   */
  public function removeOptions($options)
  {
    
  }

  /**
   * Get the last Gearman return code
   * 
   * @return  int
   */
  public function returnCode()
  {
    
  }

  /**
   * Run a list of tasks in parallel
   * 
   * @return  bool
   */
  public function runTasks()
  {
    
  }

  /**
   * Callback function when there is a data packet for a task (deprecated)
   * 
   * @deprecated
   * @param callback $callback 
   * 
   * @return  bool
   */
  public function setClientCallback($callback)
  {
    
  }

  /**
   * Set a function to be called on task completion
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setCompleteCallback($callback)
  {
    
  }

  /**
   * Set application context
   * 
   * @param string $context
   * 
   * @return  bool
   */
  public function setContext($context)
  {
    
  }

  /**
   * Set a callback for when a task is queued
   * 
   * @param string $callback
   * 
   * @return  bool
   */
  public function setCreatedCallback($callback)
  {
    
  }

  /**
   * Set application data (deprecated)
   * 
   * @deprecated
   * 
   * @param string $data
   * 
   * @return  bool
   */
  public function setData($data)
  {
    
  }

  /**
   * Callback function when there is a data packet for a task
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setDataCallback($callback)
  {
    
  }

  /**
   * Set a callback for worker exceptions
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setExceptionCallback($callback)
  {
    
  }

  /**
   * Set callback for job failure
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setFailCallback($callback)
  {
    
  }

  /**
   * Set client options
   * 
   * @param int $options
   * 
   * @return  bool
   */
  public function setOptions($options)
  {
    
  }

  /**
   * Set a callback for collecting task status
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setStatusCallback($callback)
  {
    
  }

  /**
   * Set socket I/O activity timeout
   * 
   * @param int $timeout
   * 
   * @return  bool
   */
  public function setTimeout($timeout)
  {
    
  }

  /**
   * Set a callback for worker warnings
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setWarningCallback($callback)
  {
    
  }

  /**
   * Set a callback for accepting incremental data updates
   * 
   * @param callback $callback
   * 
   * @return  bool
   */
  public function setWorkloadCallback($callback)
  {
    
  }

  /**
   * Get current socket I/O activity timeout value
   * 
   * @return  int
   */
  public function timeout()
  {
    
  }
}
