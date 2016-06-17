<?php

class ArrayOfUserAssignableBusinessObject implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UserAssignableBusinessObject[] $UserAssignableBusinessObject
     */
    protected $UserAssignableBusinessObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserAssignableBusinessObject[]
     */
    public function getUserAssignableBusinessObject()
    {
      return $this->UserAssignableBusinessObject;
    }

    /**
     * @param UserAssignableBusinessObject[] $UserAssignableBusinessObject
     * @return ArrayOfUserAssignableBusinessObject
     */
    public function setUserAssignableBusinessObject(array $UserAssignableBusinessObject = null)
    {
      $this->UserAssignableBusinessObject = $UserAssignableBusinessObject;
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
      return isset($this->UserAssignableBusinessObject[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserAssignableBusinessObject
     */
    public function offsetGet($offset)
    {
      return $this->UserAssignableBusinessObject[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserAssignableBusinessObject $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->UserAssignableBusinessObject[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->UserAssignableBusinessObject[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserAssignableBusinessObject Return the current element
     */
    public function current()
    {
      return current($this->UserAssignableBusinessObject);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UserAssignableBusinessObject);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UserAssignableBusinessObject);
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
      reset($this->UserAssignableBusinessObject);
    }

    /**
     * Countable implementation
     *
     * @return UserAssignableBusinessObject Return count of elements
     */
    public function count()
    {
      return count($this->UserAssignableBusinessObject);
    }

}
