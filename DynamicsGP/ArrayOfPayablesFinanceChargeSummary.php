<?php

class ArrayOfPayablesFinanceChargeSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesFinanceChargeSummary[] $PayablesFinanceChargeSummary
     */
    protected $PayablesFinanceChargeSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesFinanceChargeSummary[]
     */
    public function getPayablesFinanceChargeSummary()
    {
      return $this->PayablesFinanceChargeSummary;
    }

    /**
     * @param PayablesFinanceChargeSummary[] $PayablesFinanceChargeSummary
     * @return ArrayOfPayablesFinanceChargeSummary
     */
    public function setPayablesFinanceChargeSummary(array $PayablesFinanceChargeSummary = null)
    {
      $this->PayablesFinanceChargeSummary = $PayablesFinanceChargeSummary;
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
      return isset($this->PayablesFinanceChargeSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesFinanceChargeSummary
     */
    public function offsetGet($offset)
    {
      return $this->PayablesFinanceChargeSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesFinanceChargeSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesFinanceChargeSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesFinanceChargeSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesFinanceChargeSummary Return the current element
     */
    public function current()
    {
      return current($this->PayablesFinanceChargeSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesFinanceChargeSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesFinanceChargeSummary);
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
      reset($this->PayablesFinanceChargeSummary);
    }

    /**
     * Countable implementation
     *
     * @return PayablesFinanceChargeSummary Return count of elements
     */
    public function count()
    {
      return count($this->PayablesFinanceChargeSummary);
    }

}
