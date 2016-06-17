<?php

class ArrayOfDynamicsOnlineConfiguration implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DynamicsOnlineConfiguration[] $DynamicsOnlineConfiguration
     */
    protected $DynamicsOnlineConfiguration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DynamicsOnlineConfiguration[]
     */
    public function getDynamicsOnlineConfiguration()
    {
      return $this->DynamicsOnlineConfiguration;
    }

    /**
     * @param DynamicsOnlineConfiguration[] $DynamicsOnlineConfiguration
     * @return ArrayOfDynamicsOnlineConfiguration
     */
    public function setDynamicsOnlineConfiguration(array $DynamicsOnlineConfiguration = null)
    {
      $this->DynamicsOnlineConfiguration = $DynamicsOnlineConfiguration;
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
      return isset($this->DynamicsOnlineConfiguration[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DynamicsOnlineConfiguration
     */
    public function offsetGet($offset)
    {
      return $this->DynamicsOnlineConfiguration[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DynamicsOnlineConfiguration $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DynamicsOnlineConfiguration[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DynamicsOnlineConfiguration[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DynamicsOnlineConfiguration Return the current element
     */
    public function current()
    {
      return current($this->DynamicsOnlineConfiguration);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DynamicsOnlineConfiguration);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DynamicsOnlineConfiguration);
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
      reset($this->DynamicsOnlineConfiguration);
    }

    /**
     * Countable implementation
     *
     * @return DynamicsOnlineConfiguration Return count of elements
     */
    public function count()
    {
      return count($this->DynamicsOnlineConfiguration);
    }

}
