<?php

class ArrayOfServiceCallAdditionalChargeLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallAdditionalChargeLine[] $ServiceCallAdditionalChargeLine
     */
    protected $ServiceCallAdditionalChargeLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallAdditionalChargeLine[]
     */
    public function getServiceCallAdditionalChargeLine()
    {
      return $this->ServiceCallAdditionalChargeLine;
    }

    /**
     * @param ServiceCallAdditionalChargeLine[] $ServiceCallAdditionalChargeLine
     * @return ArrayOfServiceCallAdditionalChargeLine
     */
    public function setServiceCallAdditionalChargeLine(array $ServiceCallAdditionalChargeLine = null)
    {
      $this->ServiceCallAdditionalChargeLine = $ServiceCallAdditionalChargeLine;
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
      return isset($this->ServiceCallAdditionalChargeLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallAdditionalChargeLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallAdditionalChargeLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallAdditionalChargeLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallAdditionalChargeLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallAdditionalChargeLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallAdditionalChargeLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallAdditionalChargeLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallAdditionalChargeLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallAdditionalChargeLine);
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
      reset($this->ServiceCallAdditionalChargeLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallAdditionalChargeLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallAdditionalChargeLine);
    }

}
