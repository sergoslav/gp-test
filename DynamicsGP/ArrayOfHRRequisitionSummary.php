<?php

class ArrayOfHRRequisitionSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HRRequisitionSummary[] $HRRequisitionSummary
     */
    protected $HRRequisitionSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HRRequisitionSummary[]
     */
    public function getHRRequisitionSummary()
    {
      return $this->HRRequisitionSummary;
    }

    /**
     * @param HRRequisitionSummary[] $HRRequisitionSummary
     * @return ArrayOfHRRequisitionSummary
     */
    public function setHRRequisitionSummary(array $HRRequisitionSummary = null)
    {
      $this->HRRequisitionSummary = $HRRequisitionSummary;
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
      return isset($this->HRRequisitionSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HRRequisitionSummary
     */
    public function offsetGet($offset)
    {
      return $this->HRRequisitionSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HRRequisitionSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->HRRequisitionSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->HRRequisitionSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HRRequisitionSummary Return the current element
     */
    public function current()
    {
      return current($this->HRRequisitionSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HRRequisitionSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HRRequisitionSummary);
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
      reset($this->HRRequisitionSummary);
    }

    /**
     * Countable implementation
     *
     * @return HRRequisitionSummary Return count of elements
     */
    public function count()
    {
      return count($this->HRRequisitionSummary);
    }

}
