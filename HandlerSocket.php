<?php

abstract class HandlerSocket
{
  const PRIMARY = 1;

  /**
   * Creates a new HandlerSocket object
   *
   * @param  string  $host
   * @param  string  $port
   * @param  array   $options
   */
  abstract public function __construct($host, $port, array $options = array());

  /**
   * Before executing table operations, you need to open an index to work with.
   *
   * @param integer $id
   * @param string $db
   * @param string $table
   * @param string $index
   * @param string $fields
   *
   * @return boolean
   */
  public function openIndex($id, $db, $table, $index, $fields)
  {
    ;
  }

  /**
   * To read or insert or update or delete record from a table using an index.
   *
   * @param  integer  $id
   * @param  string   $op
   * @param  array    $fields
   * @param  integer  $limit
   * @param  integer  $skip
   * @param  string   $modop
   * @param  array    $values
   * @param  array    $filters
   * @param  integer  $invalues_key
   * @param  array    $invalues
   *
   * @return mixed
   */
  public function executeSingle($id, $op, $fields, $limit = 0, $skip = 0, $modop = null, $values = array(), $filters = array(), $invalues_key = 0, $invalues = array())
  {
    ;
  }

  /**
   * Multiple operations can be executed in a single call.
   *
   * @param  array  $requests
   * @return mixed
   */
  public function executeMulti($requests)
  {
    ;
  }

  /**
   * To update a record from a table using an index.
   *
   * @param  integer  $id
   * @param  string   $op
   * @param  array    $fields
   * @param  array    $values
   * @param  integer  $limit
   * @param  integer  $skip
   * @param  array    $filters
   * @param  integer  $invalues_key
   * @param  array    $invalues
   *
   * @return mixed
   */
  public function executeUpdate($id, $op, $fields, $values, $limit = 0, $skip = 0, $filters = array(), $invalues_key = 0, $invalues = array())
  {
    ;
  }

  /**
   * To delete a record from a table using an index.
   *
   * @param  integer  $id
   * @param  string   $op
   * @param  array    $fields
   * @param  integer  $limit
   * @param  integer  $skip
   * @param  array    $filters
   * @param  integer  $invalues_key
   * @param  array    $invalues
   *
   * @return mixed
   */
  public function executeDelete($id, $op, $fields, $limit = 0, $skip = 0, $filters = array(), $invalues_key = 0, $invalues = array())
  {
    ;
  }

  /**
   * To insert a record from a table using an index.
   *
   * @param  integer  $id
   * @param  array    $values
   *
   * @return mixed
   */
  public function executeInsert($id, $values)
  {
    ;
  }

  /**
   * Get last error messge.
   *
   * @return string
   */
  public function getError()
  {
    ;
  }
}
