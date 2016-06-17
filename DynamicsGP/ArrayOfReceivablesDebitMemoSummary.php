<?php

class ArrayOfReceivablesDebitMemoSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesDebitMemoSummary[] $ReceivablesDebitMemoSummary
     */
    protected $ReceivablesDebitMemoSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesDebitMemoSummary[]
     */
    public function getReceivablesDebitMemoSummary()
    {
      return $this->ReceivablesDebitMemoSummary;
    }

    /**
     * @param ReceivablesDebitMemoSummary[] $ReceivablesDebitMemoSummary
     * @return ArrayOfReceivablesDebitMemoSummary
     */
    public function setReceivablesDebitMemoSummary(array $ReceivablesDebitMemoSummary = null)
    {
      $this->ReceivablesDebitMemoSummary = $ReceivablesDebitMemoSummary;
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
      return isset($this->ReceivablesDebitMemoSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesDebitMemoSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesDebitMemoSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesDebitMemoSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesDebitMemoSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesDebitMemoSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesDebitMemoSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesDebitMemoSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesDebitMemoSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesDebitMemoSummary);
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
      reset($this->ReceivablesDebitMemoSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesDebitMemoSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesDebitMemoSummary);
    }

}
