<?php

class ArrayOfReceivablesCommission implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesCommission[] $ReceivablesCommission
     */
    protected $ReceivablesCommission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesCommission[]
     */
    public function getReceivablesCommission()
    {
      return $this->ReceivablesCommission;
    }

    /**
     * @param ReceivablesCommission[] $ReceivablesCommission
     * @return ArrayOfReceivablesCommission
     */
    public function setReceivablesCommission(array $ReceivablesCommission = null)
    {
      $this->ReceivablesCommission = $ReceivablesCommission;
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
      return isset($this->ReceivablesCommission[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesCommission
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesCommission[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesCommission $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesCommission[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesCommission[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesCommission Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesCommission);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesCommission);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesCommission);
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
      reset($this->ReceivablesCommission);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesCommission Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesCommission);
    }

}
