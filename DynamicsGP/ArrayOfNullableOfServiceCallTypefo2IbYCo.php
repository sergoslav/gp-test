<?php

class ArrayOfNullableOfServiceCallTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallType[] $ServiceCallType
     */
    protected $ServiceCallType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallType[]
     */
    public function getServiceCallType()
    {
      return $this->ServiceCallType;
    }

    /**
     * @param ServiceCallType[] $ServiceCallType
     * @return ArrayOfNullableOfServiceCallTypefo2IbYCo
     */
    public function setServiceCallType(array $ServiceCallType = null)
    {
      $this->ServiceCallType = $ServiceCallType;
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
      return isset($this->ServiceCallType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallType
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallType Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallType);
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
      reset($this->ServiceCallType);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallType Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallType);
    }

}
