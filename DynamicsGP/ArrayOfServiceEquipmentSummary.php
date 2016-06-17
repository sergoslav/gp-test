<?php

class ArrayOfServiceEquipmentSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceEquipmentSummary[] $ServiceEquipmentSummary
     */
    protected $ServiceEquipmentSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceEquipmentSummary[]
     */
    public function getServiceEquipmentSummary()
    {
      return $this->ServiceEquipmentSummary;
    }

    /**
     * @param ServiceEquipmentSummary[] $ServiceEquipmentSummary
     * @return ArrayOfServiceEquipmentSummary
     */
    public function setServiceEquipmentSummary(array $ServiceEquipmentSummary = null)
    {
      $this->ServiceEquipmentSummary = $ServiceEquipmentSummary;
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
      return isset($this->ServiceEquipmentSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceEquipmentSummary
     */
    public function offsetGet($offset)
    {
      return $this->ServiceEquipmentSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceEquipmentSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceEquipmentSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceEquipmentSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceEquipmentSummary Return the current element
     */
    public function current()
    {
      return current($this->ServiceEquipmentSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceEquipmentSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceEquipmentSummary);
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
      reset($this->ServiceEquipmentSummary);
    }

    /**
     * Countable implementation
     *
     * @return ServiceEquipmentSummary Return count of elements
     */
    public function count()
    {
      return count($this->ServiceEquipmentSummary);
    }

}
