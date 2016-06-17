<?php

class ArrayOfProjectContractAccountType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectContractAccountType[] $ProjectContractAccountType
     */
    protected $ProjectContractAccountType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectContractAccountType[]
     */
    public function getProjectContractAccountType()
    {
      return $this->ProjectContractAccountType;
    }

    /**
     * @param ProjectContractAccountType[] $ProjectContractAccountType
     * @return ArrayOfProjectContractAccountType
     */
    public function setProjectContractAccountType(array $ProjectContractAccountType = null)
    {
      $this->ProjectContractAccountType = $ProjectContractAccountType;
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
      return isset($this->ProjectContractAccountType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectContractAccountType
     */
    public function offsetGet($offset)
    {
      return $this->ProjectContractAccountType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectContractAccountType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectContractAccountType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectContractAccountType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectContractAccountType Return the current element
     */
    public function current()
    {
      return current($this->ProjectContractAccountType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectContractAccountType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectContractAccountType);
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
      reset($this->ProjectContractAccountType);
    }

    /**
     * Countable implementation
     *
     * @return ProjectContractAccountType Return count of elements
     */
    public function count()
    {
      return count($this->ProjectContractAccountType);
    }

}
