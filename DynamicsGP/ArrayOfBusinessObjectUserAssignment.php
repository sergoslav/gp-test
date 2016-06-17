<?php

class ArrayOfBusinessObjectUserAssignment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BusinessObjectUserAssignment[] $BusinessObjectUserAssignment
     */
    protected $BusinessObjectUserAssignment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BusinessObjectUserAssignment[]
     */
    public function getBusinessObjectUserAssignment()
    {
      return $this->BusinessObjectUserAssignment;
    }

    /**
     * @param BusinessObjectUserAssignment[] $BusinessObjectUserAssignment
     * @return ArrayOfBusinessObjectUserAssignment
     */
    public function setBusinessObjectUserAssignment(array $BusinessObjectUserAssignment = null)
    {
      $this->BusinessObjectUserAssignment = $BusinessObjectUserAssignment;
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
      return isset($this->BusinessObjectUserAssignment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BusinessObjectUserAssignment
     */
    public function offsetGet($offset)
    {
      return $this->BusinessObjectUserAssignment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BusinessObjectUserAssignment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BusinessObjectUserAssignment[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BusinessObjectUserAssignment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BusinessObjectUserAssignment Return the current element
     */
    public function current()
    {
      return current($this->BusinessObjectUserAssignment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BusinessObjectUserAssignment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BusinessObjectUserAssignment);
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
      reset($this->BusinessObjectUserAssignment);
    }

    /**
     * Countable implementation
     *
     * @return BusinessObjectUserAssignment Return count of elements
     */
    public function count()
    {
      return count($this->BusinessObjectUserAssignment);
    }

}
