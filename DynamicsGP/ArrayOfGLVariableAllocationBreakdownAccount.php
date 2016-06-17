<?php

class ArrayOfGLVariableAllocationBreakdownAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLVariableAllocationBreakdownAccount[] $GLVariableAllocationBreakdownAccount
     */
    protected $GLVariableAllocationBreakdownAccount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLVariableAllocationBreakdownAccount[]
     */
    public function getGLVariableAllocationBreakdownAccount()
    {
      return $this->GLVariableAllocationBreakdownAccount;
    }

    /**
     * @param GLVariableAllocationBreakdownAccount[] $GLVariableAllocationBreakdownAccount
     * @return ArrayOfGLVariableAllocationBreakdownAccount
     */
    public function setGLVariableAllocationBreakdownAccount(array $GLVariableAllocationBreakdownAccount = null)
    {
      $this->GLVariableAllocationBreakdownAccount = $GLVariableAllocationBreakdownAccount;
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
      return isset($this->GLVariableAllocationBreakdownAccount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLVariableAllocationBreakdownAccount
     */
    public function offsetGet($offset)
    {
      return $this->GLVariableAllocationBreakdownAccount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLVariableAllocationBreakdownAccount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLVariableAllocationBreakdownAccount[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLVariableAllocationBreakdownAccount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLVariableAllocationBreakdownAccount Return the current element
     */
    public function current()
    {
      return current($this->GLVariableAllocationBreakdownAccount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLVariableAllocationBreakdownAccount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLVariableAllocationBreakdownAccount);
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
      reset($this->GLVariableAllocationBreakdownAccount);
    }

    /**
     * Countable implementation
     *
     * @return GLVariableAllocationBreakdownAccount Return count of elements
     */
    public function count()
    {
      return count($this->GLVariableAllocationBreakdownAccount);
    }

}
