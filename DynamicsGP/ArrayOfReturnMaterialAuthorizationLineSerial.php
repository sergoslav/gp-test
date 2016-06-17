<?php

class ArrayOfReturnMaterialAuthorizationLineSerial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationLineSerial[] $ReturnMaterialAuthorizationLineSerial
     */
    protected $ReturnMaterialAuthorizationLineSerial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationLineSerial[]
     */
    public function getReturnMaterialAuthorizationLineSerial()
    {
      return $this->ReturnMaterialAuthorizationLineSerial;
    }

    /**
     * @param ReturnMaterialAuthorizationLineSerial[] $ReturnMaterialAuthorizationLineSerial
     * @return ArrayOfReturnMaterialAuthorizationLineSerial
     */
    public function setReturnMaterialAuthorizationLineSerial(array $ReturnMaterialAuthorizationLineSerial = null)
    {
      $this->ReturnMaterialAuthorizationLineSerial = $ReturnMaterialAuthorizationLineSerial;
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
      return isset($this->ReturnMaterialAuthorizationLineSerial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationLineSerial
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationLineSerial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationLineSerial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationLineSerial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationLineSerial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationLineSerial Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationLineSerial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationLineSerial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationLineSerial);
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
      reset($this->ReturnMaterialAuthorizationLineSerial);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationLineSerial Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationLineSerial);
    }

}
