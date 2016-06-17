<?php

class ArrayOfPayablesCreditMemoSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesCreditMemoSummary[] $PayablesCreditMemoSummary
     */
    protected $PayablesCreditMemoSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesCreditMemoSummary[]
     */
    public function getPayablesCreditMemoSummary()
    {
      return $this->PayablesCreditMemoSummary;
    }

    /**
     * @param PayablesCreditMemoSummary[] $PayablesCreditMemoSummary
     * @return ArrayOfPayablesCreditMemoSummary
     */
    public function setPayablesCreditMemoSummary(array $PayablesCreditMemoSummary = null)
    {
      $this->PayablesCreditMemoSummary = $PayablesCreditMemoSummary;
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
      return isset($this->PayablesCreditMemoSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesCreditMemoSummary
     */
    public function offsetGet($offset)
    {
      return $this->PayablesCreditMemoSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesCreditMemoSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesCreditMemoSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesCreditMemoSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesCreditMemoSummary Return the current element
     */
    public function current()
    {
      return current($this->PayablesCreditMemoSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesCreditMemoSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesCreditMemoSummary);
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
      reset($this->PayablesCreditMemoSummary);
    }

    /**
     * Countable implementation
     *
     * @return PayablesCreditMemoSummary Return count of elements
     */
    public function count()
    {
      return count($this->PayablesCreditMemoSummary);
    }

}
