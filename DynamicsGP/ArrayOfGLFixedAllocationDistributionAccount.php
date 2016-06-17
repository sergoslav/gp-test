<?php

class ArrayOfGLFixedAllocationDistributionAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLFixedAllocationDistributionAccount[] $GLFixedAllocationDistributionAccount
     */
    protected $GLFixedAllocationDistributionAccount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLFixedAllocationDistributionAccount[]
     */
    public function getGLFixedAllocationDistributionAccount()
    {
      return $this->GLFixedAllocationDistributionAccount;
    }

    /**
     * @param GLFixedAllocationDistributionAccount[] $GLFixedAllocationDistributionAccount
     * @return ArrayOfGLFixedAllocationDistributionAccount
     */
    public function setGLFixedAllocationDistributionAccount(array $GLFixedAllocationDistributionAccount = null)
    {
      $this->GLFixedAllocationDistributionAccount = $GLFixedAllocationDistributionAccount;
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
      return isset($this->GLFixedAllocationDistributionAccount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLFixedAllocationDistributionAccount
     */
    public function offsetGet($offset)
    {
      return $this->GLFixedAllocationDistributionAccount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLFixedAllocationDistributionAccount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLFixedAllocationDistributionAccount[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLFixedAllocationDistributionAccount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLFixedAllocationDistributionAccount Return the current element
     */
    public function current()
    {
      return current($this->GLFixedAllocationDistributionAccount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLFixedAllocationDistributionAccount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLFixedAllocationDistributionAccount);
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
      reset($this->GLFixedAllocationDistributionAccount);
    }

    /**
     * Countable implementation
     *
     * @return GLFixedAllocationDistributionAccount Return count of elements
     */
    public function count()
    {
      return count($this->GLFixedAllocationDistributionAccount);
    }

}
