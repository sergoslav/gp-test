<?php

class ArrayOfReturnMaterialAuthorizationLineLot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationLineLot[] $ReturnMaterialAuthorizationLineLot
     */
    protected $ReturnMaterialAuthorizationLineLot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationLineLot[]
     */
    public function getReturnMaterialAuthorizationLineLot()
    {
      return $this->ReturnMaterialAuthorizationLineLot;
    }

    /**
     * @param ReturnMaterialAuthorizationLineLot[] $ReturnMaterialAuthorizationLineLot
     * @return ArrayOfReturnMaterialAuthorizationLineLot
     */
    public function setReturnMaterialAuthorizationLineLot(array $ReturnMaterialAuthorizationLineLot = null)
    {
      $this->ReturnMaterialAuthorizationLineLot = $ReturnMaterialAuthorizationLineLot;
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
      return isset($this->ReturnMaterialAuthorizationLineLot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationLineLot
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationLineLot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationLineLot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationLineLot[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationLineLot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationLineLot Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationLineLot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationLineLot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationLineLot);
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
      reset($this->ReturnMaterialAuthorizationLineLot);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationLineLot Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationLineLot);
    }

}
