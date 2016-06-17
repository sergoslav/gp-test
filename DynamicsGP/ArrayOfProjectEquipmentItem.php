<?php

class ArrayOfProjectEquipmentItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectEquipmentItem[] $ProjectEquipmentItem
     */
    protected $ProjectEquipmentItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectEquipmentItem[]
     */
    public function getProjectEquipmentItem()
    {
      return $this->ProjectEquipmentItem;
    }

    /**
     * @param ProjectEquipmentItem[] $ProjectEquipmentItem
     * @return ArrayOfProjectEquipmentItem
     */
    public function setProjectEquipmentItem(array $ProjectEquipmentItem = null)
    {
      $this->ProjectEquipmentItem = $ProjectEquipmentItem;
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
      return isset($this->ProjectEquipmentItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectEquipmentItem
     */
    public function offsetGet($offset)
    {
      return $this->ProjectEquipmentItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectEquipmentItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectEquipmentItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectEquipmentItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectEquipmentItem Return the current element
     */
    public function current()
    {
      return current($this->ProjectEquipmentItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectEquipmentItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectEquipmentItem);
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
      reset($this->ProjectEquipmentItem);
    }

    /**
     * Countable implementation
     *
     * @return ProjectEquipmentItem Return count of elements
     */
    public function count()
    {
      return count($this->ProjectEquipmentItem);
    }

}
