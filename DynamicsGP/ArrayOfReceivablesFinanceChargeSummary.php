<?php

class ArrayOfReceivablesFinanceChargeSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesFinanceChargeSummary[] $ReceivablesFinanceChargeSummary
     */
    protected $ReceivablesFinanceChargeSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesFinanceChargeSummary[]
     */
    public function getReceivablesFinanceChargeSummary()
    {
      return $this->ReceivablesFinanceChargeSummary;
    }

    /**
     * @param ReceivablesFinanceChargeSummary[] $ReceivablesFinanceChargeSummary
     * @return ArrayOfReceivablesFinanceChargeSummary
     */
    public function setReceivablesFinanceChargeSummary(array $ReceivablesFinanceChargeSummary = null)
    {
      $this->ReceivablesFinanceChargeSummary = $ReceivablesFinanceChargeSummary;
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
      return isset($this->ReceivablesFinanceChargeSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesFinanceChargeSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesFinanceChargeSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesFinanceChargeSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesFinanceChargeSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesFinanceChargeSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesFinanceChargeSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesFinanceChargeSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesFinanceChargeSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesFinanceChargeSummary);
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
      reset($this->ReceivablesFinanceChargeSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesFinanceChargeSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesFinanceChargeSummary);
    }

}
