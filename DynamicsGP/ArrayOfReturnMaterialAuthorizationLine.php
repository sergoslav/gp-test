<?php

class ArrayOfReturnMaterialAuthorizationLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationLine[] $ReturnMaterialAuthorizationLine
     */
    protected $ReturnMaterialAuthorizationLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationLine[]
     */
    public function getReturnMaterialAuthorizationLine()
    {
      return $this->ReturnMaterialAuthorizationLine;
    }

    /**
     * @param ReturnMaterialAuthorizationLine[] $ReturnMaterialAuthorizationLine
     * @return ArrayOfReturnMaterialAuthorizationLine
     */
    public function setReturnMaterialAuthorizationLine(array $ReturnMaterialAuthorizationLine = null)
    {
      $this->ReturnMaterialAuthorizationLine = $ReturnMaterialAuthorizationLine;
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
      return isset($this->ReturnMaterialAuthorizationLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationLine
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationLine Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationLine);
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
      reset($this->ReturnMaterialAuthorizationLine);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationLine Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationLine);
    }

}
