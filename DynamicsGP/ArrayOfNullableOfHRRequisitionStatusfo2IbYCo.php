<?php

class ArrayOfNullableOfHRRequisitionStatusfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HRRequisitionStatus[] $HRRequisitionStatus
     */
    protected $HRRequisitionStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HRRequisitionStatus[]
     */
    public function getHRRequisitionStatus()
    {
      return $this->HRRequisitionStatus;
    }

    /**
     * @param HRRequisitionStatus[] $HRRequisitionStatus
     * @return ArrayOfNullableOfHRRequisitionStatusfo2IbYCo
     */
    public function setHRRequisitionStatus(array $HRRequisitionStatus = null)
    {
      $this->HRRequisitionStatus = $HRRequisitionStatus;
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
      return isset($this->HRRequisitionStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HRRequisitionStatus
     */
    public function offsetGet($offset)
    {
      return $this->HRRequisitionStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HRRequisitionStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->HRRequisitionStatus[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->HRRequisitionStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HRRequisitionStatus Return the current element
     */
    public function current()
    {
      return current($this->HRRequisitionStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HRRequisitionStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HRRequisitionStatus);
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
      reset($this->HRRequisitionStatus);
    }

    /**
     * Countable implementation
     *
     * @return HRRequisitionStatus Return count of elements
     */
    public function count()
    {
      return count($this->HRRequisitionStatus);
    }

}
