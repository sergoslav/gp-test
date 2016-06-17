<?php

class ArrayOfReceivablesServiceRepairSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesServiceRepairSummary[] $ReceivablesServiceRepairSummary
     */
    protected $ReceivablesServiceRepairSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesServiceRepairSummary[]
     */
    public function getReceivablesServiceRepairSummary()
    {
      return $this->ReceivablesServiceRepairSummary;
    }

    /**
     * @param ReceivablesServiceRepairSummary[] $ReceivablesServiceRepairSummary
     * @return ArrayOfReceivablesServiceRepairSummary
     */
    public function setReceivablesServiceRepairSummary(array $ReceivablesServiceRepairSummary = null)
    {
      $this->ReceivablesServiceRepairSummary = $ReceivablesServiceRepairSummary;
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
      return isset($this->ReceivablesServiceRepairSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesServiceRepairSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesServiceRepairSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesServiceRepairSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesServiceRepairSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesServiceRepairSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesServiceRepairSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesServiceRepairSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesServiceRepairSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesServiceRepairSummary);
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
      reset($this->ReceivablesServiceRepairSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesServiceRepairSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesServiceRepairSummary);
    }

}
