<?php

class ArrayOfReturnMaterialAuthorizationSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationSummary[] $ReturnMaterialAuthorizationSummary
     */
    protected $ReturnMaterialAuthorizationSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationSummary[]
     */
    public function getReturnMaterialAuthorizationSummary()
    {
      return $this->ReturnMaterialAuthorizationSummary;
    }

    /**
     * @param ReturnMaterialAuthorizationSummary[] $ReturnMaterialAuthorizationSummary
     * @return ArrayOfReturnMaterialAuthorizationSummary
     */
    public function setReturnMaterialAuthorizationSummary(array $ReturnMaterialAuthorizationSummary = null)
    {
      $this->ReturnMaterialAuthorizationSummary = $ReturnMaterialAuthorizationSummary;
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
      return isset($this->ReturnMaterialAuthorizationSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationSummary Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationSummary);
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
      reset($this->ReturnMaterialAuthorizationSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationSummary);
    }

}
