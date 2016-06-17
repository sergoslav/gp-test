<?php

class ArrayOfGLVariableAllocationDistributionAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLVariableAllocationDistributionAccount[] $GLVariableAllocationDistributionAccount
     */
    protected $GLVariableAllocationDistributionAccount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLVariableAllocationDistributionAccount[]
     */
    public function getGLVariableAllocationDistributionAccount()
    {
      return $this->GLVariableAllocationDistributionAccount;
    }

    /**
     * @param GLVariableAllocationDistributionAccount[] $GLVariableAllocationDistributionAccount
     * @return ArrayOfGLVariableAllocationDistributionAccount
     */
    public function setGLVariableAllocationDistributionAccount(array $GLVariableAllocationDistributionAccount = null)
    {
      $this->GLVariableAllocationDistributionAccount = $GLVariableAllocationDistributionAccount;
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
      return isset($this->GLVariableAllocationDistributionAccount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLVariableAllocationDistributionAccount
     */
    public function offsetGet($offset)
    {
      return $this->GLVariableAllocationDistributionAccount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLVariableAllocationDistributionAccount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLVariableAllocationDistributionAccount[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLVariableAllocationDistributionAccount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLVariableAllocationDistributionAccount Return the current element
     */
    public function current()
    {
      return current($this->GLVariableAllocationDistributionAccount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLVariableAllocationDistributionAccount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLVariableAllocationDistributionAccount);
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
      reset($this->GLVariableAllocationDistributionAccount);
    }

    /**
     * Countable implementation
     *
     * @return GLVariableAllocationDistributionAccount Return count of elements
     */
    public function count()
    {
      return count($this->GLVariableAllocationDistributionAccount);
    }

}
