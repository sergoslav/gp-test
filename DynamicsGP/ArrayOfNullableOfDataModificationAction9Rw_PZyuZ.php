<?php

class ArrayOfNullableOfDataModificationAction9Rw_PZyuZ implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DataModificationAction[] $DataModificationAction
     */
    protected $DataModificationAction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataModificationAction[]
     */
    public function getDataModificationAction()
    {
      return $this->DataModificationAction;
    }

    /**
     * @param DataModificationAction[] $DataModificationAction
     * @return ArrayOfNullableOfDataModificationAction9Rw_PZyuZ
     */
    public function setDataModificationAction(array $DataModificationAction = null)
    {
      $this->DataModificationAction = $DataModificationAction;
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
      return isset($this->DataModificationAction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DataModificationAction
     */
    public function offsetGet($offset)
    {
      return $this->DataModificationAction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DataModificationAction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DataModificationAction[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DataModificationAction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DataModificationAction Return the current element
     */
    public function current()
    {
      return current($this->DataModificationAction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DataModificationAction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DataModificationAction);
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
      reset($this->DataModificationAction);
    }

    /**
     * Countable implementation
     *
     * @return DataModificationAction Return count of elements
     */
    public function count()
    {
      return count($this->DataModificationAction);
    }

}
