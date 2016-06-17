<?php

class ArrayOfServiceEquipmentReading implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceEquipmentReading[] $ServiceEquipmentReading
     */
    protected $ServiceEquipmentReading = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceEquipmentReading[]
     */
    public function getServiceEquipmentReading()
    {
      return $this->ServiceEquipmentReading;
    }

    /**
     * @param ServiceEquipmentReading[] $ServiceEquipmentReading
     * @return ArrayOfServiceEquipmentReading
     */
    public function setServiceEquipmentReading(array $ServiceEquipmentReading = null)
    {
      $this->ServiceEquipmentReading = $ServiceEquipmentReading;
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
      return isset($this->ServiceEquipmentReading[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceEquipmentReading
     */
    public function offsetGet($offset)
    {
      return $this->ServiceEquipmentReading[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceEquipmentReading $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceEquipmentReading[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceEquipmentReading[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceEquipmentReading Return the current element
     */
    public function current()
    {
      return current($this->ServiceEquipmentReading);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceEquipmentReading);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceEquipmentReading);
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
      reset($this->ServiceEquipmentReading);
    }

    /**
     * Countable implementation
     *
     * @return ServiceEquipmentReading Return count of elements
     */
    public function count()
    {
      return count($this->ServiceEquipmentReading);
    }

}
