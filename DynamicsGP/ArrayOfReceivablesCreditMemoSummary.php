<?php

class ArrayOfReceivablesCreditMemoSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesCreditMemoSummary[] $ReceivablesCreditMemoSummary
     */
    protected $ReceivablesCreditMemoSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesCreditMemoSummary[]
     */
    public function getReceivablesCreditMemoSummary()
    {
      return $this->ReceivablesCreditMemoSummary;
    }

    /**
     * @param ReceivablesCreditMemoSummary[] $ReceivablesCreditMemoSummary
     * @return ArrayOfReceivablesCreditMemoSummary
     */
    public function setReceivablesCreditMemoSummary(array $ReceivablesCreditMemoSummary = null)
    {
      $this->ReceivablesCreditMemoSummary = $ReceivablesCreditMemoSummary;
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
      return isset($this->ReceivablesCreditMemoSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesCreditMemoSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesCreditMemoSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesCreditMemoSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesCreditMemoSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesCreditMemoSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesCreditMemoSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesCreditMemoSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesCreditMemoSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesCreditMemoSummary);
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
      reset($this->ReceivablesCreditMemoSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesCreditMemoSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesCreditMemoSummary);
    }

}
