<?php

class ArrayOfRoleKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoleKey[] $RoleKey
     */
    protected $RoleKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoleKey[]
     */
    public function getRoleKey()
    {
      return $this->RoleKey;
    }

    /**
     * @param RoleKey[] $RoleKey
     * @return ArrayOfRoleKey
     */
    public function setRoleKey(array $RoleKey = null)
    {
      $this->RoleKey = $RoleKey;
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
      return isset($this->RoleKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoleKey
     */
    public function offsetGet($offset)
    {
      return $this->RoleKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoleKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->RoleKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RoleKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoleKey Return the current element
     */
    public function current()
    {
      return current($this->RoleKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoleKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoleKey);
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
      reset($this->RoleKey);
    }

    /**
     * Countable implementation
     *
     * @return RoleKey Return count of elements
     */
    public function count()
    {
      return count($this->RoleKey);
    }

}
