<?php

class ArrayOfItemSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemSummary[] $ItemSummary
     */
    protected $ItemSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemSummary[]
     */
    public function getItemSummary()
    {
      return $this->ItemSummary;
    }

    /**
     * @param ItemSummary[] $ItemSummary
     * @return ArrayOfItemSummary
     */
    public function setItemSummary(array $ItemSummary = null)
    {
      $this->ItemSummary = $ItemSummary;
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
      return isset($this->ItemSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemSummary
     */
    public function offsetGet($offset)
    {
      return $this->ItemSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemSummary Return the current element
     */
    public function current()
    {
      return current($this->ItemSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemSummary);
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
      reset($this->ItemSummary);
    }

    /**
     * Countable implementation
     *
     * @return ItemSummary Return count of elements
     */
    public function count()
    {
      return count($this->ItemSummary);
    }

}
