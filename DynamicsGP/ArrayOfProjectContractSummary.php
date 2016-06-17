<?php

class ArrayOfProjectContractSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectContractSummary[] $ProjectContractSummary
     */
    protected $ProjectContractSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectContractSummary[]
     */
    public function getProjectContractSummary()
    {
      return $this->ProjectContractSummary;
    }

    /**
     * @param ProjectContractSummary[] $ProjectContractSummary
     * @return ArrayOfProjectContractSummary
     */
    public function setProjectContractSummary(array $ProjectContractSummary = null)
    {
      $this->ProjectContractSummary = $ProjectContractSummary;
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
      return isset($this->ProjectContractSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectContractSummary
     */
    public function offsetGet($offset)
    {
      return $this->ProjectContractSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectContractSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectContractSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectContractSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectContractSummary Return the current element
     */
    public function current()
    {
      return current($this->ProjectContractSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectContractSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectContractSummary);
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
      reset($this->ProjectContractSummary);
    }

    /**
     * Countable implementation
     *
     * @return ProjectContractSummary Return count of elements
     */
    public function count()
    {
      return count($this->ProjectContractSummary);
    }

}
