<?php

class ArrayOfReceivablesDistribution implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesDistribution[] $ReceivablesDistribution
     */
    protected $ReceivablesDistribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesDistribution[]
     */
    public function getReceivablesDistribution()
    {
      return $this->ReceivablesDistribution;
    }

    /**
     * @param ReceivablesDistribution[] $ReceivablesDistribution
     * @return ArrayOfReceivablesDistribution
     */
    public function setReceivablesDistribution(array $ReceivablesDistribution = null)
    {
      $this->ReceivablesDistribution = $ReceivablesDistribution;
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
      return isset($this->ReceivablesDistribution[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesDistribution
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesDistribution[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesDistribution $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesDistribution[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesDistribution[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesDistribution Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesDistribution);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesDistribution);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesDistribution);
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
      reset($this->ReceivablesDistribution);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesDistribution Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesDistribution);
    }

}
