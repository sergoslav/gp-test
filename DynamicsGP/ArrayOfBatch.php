<?php

class ArrayOfBatch implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Batch[] $Batch
     */
    protected $Batch = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Batch[]
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param Batch[] $Batch
     * @return ArrayOfBatch
     */
    public function setBatch(array $Batch = null)
    {
      $this->Batch = $Batch;
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
      return isset($this->Batch[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Batch
     */
    public function offsetGet($offset)
    {
      return $this->Batch[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Batch $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Batch[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Batch[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Batch Return the current element
     */
    public function current()
    {
      return current($this->Batch);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Batch);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Batch);
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
      reset($this->Batch);
    }

    /**
     * Countable implementation
     *
     * @return Batch Return count of elements
     */
    public function count()
    {
      return count($this->Batch);
    }

}
