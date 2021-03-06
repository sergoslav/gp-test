<?php

class ArrayOfBackOfficeRole implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BackOfficeRole[] $BackOfficeRole
     */
    protected $BackOfficeRole = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BackOfficeRole[]
     */
    public function getBackOfficeRole()
    {
      return $this->BackOfficeRole;
    }

    /**
     * @param BackOfficeRole[] $BackOfficeRole
     * @return ArrayOfBackOfficeRole
     */
    public function setBackOfficeRole(array $BackOfficeRole = null)
    {
      $this->BackOfficeRole = $BackOfficeRole;
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
      return isset($this->BackOfficeRole[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BackOfficeRole
     */
    public function offsetGet($offset)
    {
      return $this->BackOfficeRole[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BackOfficeRole $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BackOfficeRole[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BackOfficeRole[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BackOfficeRole Return the current element
     */
    public function current()
    {
      return current($this->BackOfficeRole);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BackOfficeRole);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BackOfficeRole);
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
      reset($this->BackOfficeRole);
    }

    /**
     * Countable implementation
     *
     * @return BackOfficeRole Return count of elements
     */
    public function count()
    {
      return count($this->BackOfficeRole);
    }

}
