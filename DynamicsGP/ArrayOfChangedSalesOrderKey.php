<?php

class ArrayOfChangedSalesOrderKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedSalesOrderKey[] $ChangedSalesOrderKey
     */
    protected $ChangedSalesOrderKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedSalesOrderKey[]
     */
    public function getChangedSalesOrderKey()
    {
      return $this->ChangedSalesOrderKey;
    }

    /**
     * @param ChangedSalesOrderKey[] $ChangedSalesOrderKey
     * @return ArrayOfChangedSalesOrderKey
     */
    public function setChangedSalesOrderKey(array $ChangedSalesOrderKey = null)
    {
      $this->ChangedSalesOrderKey = $ChangedSalesOrderKey;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ChangedSalesOrderKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedSalesOrderKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedSalesOrderKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedSalesOrderKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedSalesOrderKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedSalesOrderKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedSalesOrderKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedSalesOrderKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedSalesOrderKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedSalesOrderKey);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ChangedSalesOrderKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedSalesOrderKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedSalesOrderKey);
    }

}
