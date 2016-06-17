<?php

class ArrayOfTenant implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Tenant[] $Tenant
     */
    protected $Tenant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Tenant[]
     */
    public function getTenant()
    {
      return $this->Tenant;
    }

    /**
     * @param Tenant[] $Tenant
     * @return ArrayOfTenant
     */
    public function setTenant(array $Tenant = null)
    {
      $this->Tenant = $Tenant;
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
      return isset($this->Tenant[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Tenant
     */
    public function offsetGet($offset)
    {
      return $this->Tenant[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Tenant $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Tenant[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Tenant[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Tenant Return the current element
     */
    public function current()
    {
      return current($this->Tenant);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Tenant);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Tenant);
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
      reset($this->Tenant);
    }

    /**
     * Countable implementation
     *
     * @return Tenant Return count of elements
     */
    public function count()
    {
      return count($this->Tenant);
    }

}
