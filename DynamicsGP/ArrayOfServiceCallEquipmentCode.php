<?php

class ArrayOfServiceCallEquipmentCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallEquipmentCode[] $ServiceCallEquipmentCode
     */
    protected $ServiceCallEquipmentCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallEquipmentCode[]
     */
    public function getServiceCallEquipmentCode()
    {
      return $this->ServiceCallEquipmentCode;
    }

    /**
     * @param ServiceCallEquipmentCode[] $ServiceCallEquipmentCode
     * @return ArrayOfServiceCallEquipmentCode
     */
    public function setServiceCallEquipmentCode(array $ServiceCallEquipmentCode = null)
    {
      $this->ServiceCallEquipmentCode = $ServiceCallEquipmentCode;
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
      return isset($this->ServiceCallEquipmentCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallEquipmentCode
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallEquipmentCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallEquipmentCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallEquipmentCode[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallEquipmentCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallEquipmentCode Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallEquipmentCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallEquipmentCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallEquipmentCode);
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
      reset($this->ServiceCallEquipmentCode);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallEquipmentCode Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallEquipmentCode);
    }

}
