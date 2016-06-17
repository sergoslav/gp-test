<?php

class ArrayOfBackOfficeRoleAssignment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BackOfficeRoleAssignment[] $BackOfficeRoleAssignment
     */
    protected $BackOfficeRoleAssignment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BackOfficeRoleAssignment[]
     */
    public function getBackOfficeRoleAssignment()
    {
      return $this->BackOfficeRoleAssignment;
    }

    /**
     * @param BackOfficeRoleAssignment[] $BackOfficeRoleAssignment
     * @return ArrayOfBackOfficeRoleAssignment
     */
    public function setBackOfficeRoleAssignment(array $BackOfficeRoleAssignment = null)
    {
      $this->BackOfficeRoleAssignment = $BackOfficeRoleAssignment;
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
      return isset($this->BackOfficeRoleAssignment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BackOfficeRoleAssignment
     */
    public function offsetGet($offset)
    {
      return $this->BackOfficeRoleAssignment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BackOfficeRoleAssignment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BackOfficeRoleAssignment[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BackOfficeRoleAssignment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BackOfficeRoleAssignment Return the current element
     */
    public function current()
    {
      return current($this->BackOfficeRoleAssignment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BackOfficeRoleAssignment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BackOfficeRoleAssignment);
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
      reset($this->BackOfficeRoleAssignment);
    }

    /**
     * Countable implementation
     *
     * @return BackOfficeRoleAssignment Return count of elements
     */
    public function count()
    {
      return count($this->BackOfficeRoleAssignment);
    }

}
