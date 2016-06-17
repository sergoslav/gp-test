<?php

class ArrayOfManufacturingOrderPickListItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ManufacturingOrderPickListItem[] $ManufacturingOrderPickListItem
     */
    protected $ManufacturingOrderPickListItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderPickListItem[]
     */
    public function getManufacturingOrderPickListItem()
    {
      return $this->ManufacturingOrderPickListItem;
    }

    /**
     * @param ManufacturingOrderPickListItem[] $ManufacturingOrderPickListItem
     * @return ArrayOfManufacturingOrderPickListItem
     */
    public function setManufacturingOrderPickListItem(array $ManufacturingOrderPickListItem = null)
    {
      $this->ManufacturingOrderPickListItem = $ManufacturingOrderPickListItem;
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
      return isset($this->ManufacturingOrderPickListItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ManufacturingOrderPickListItem
     */
    public function offsetGet($offset)
    {
      return $this->ManufacturingOrderPickListItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ManufacturingOrderPickListItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ManufacturingOrderPickListItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ManufacturingOrderPickListItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ManufacturingOrderPickListItem Return the current element
     */
    public function current()
    {
      return current($this->ManufacturingOrderPickListItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ManufacturingOrderPickListItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ManufacturingOrderPickListItem);
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
      reset($this->ManufacturingOrderPickListItem);
    }

    /**
     * Countable implementation
     *
     * @return ManufacturingOrderPickListItem Return count of elements
     */
    public function count()
    {
      return count($this->ManufacturingOrderPickListItem);
    }

}
