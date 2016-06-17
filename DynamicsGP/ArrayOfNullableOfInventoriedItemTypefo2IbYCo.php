<?php

class ArrayOfNullableOfInventoriedItemTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoriedItemType[] $InventoriedItemType
     */
    protected $InventoriedItemType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoriedItemType[]
     */
    public function getInventoriedItemType()
    {
      return $this->InventoriedItemType;
    }

    /**
     * @param InventoriedItemType[] $InventoriedItemType
     * @return ArrayOfNullableOfInventoriedItemTypefo2IbYCo
     */
    public function setInventoriedItemType(array $InventoriedItemType = null)
    {
      $this->InventoriedItemType = $InventoriedItemType;
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
      return isset($this->InventoriedItemType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoriedItemType
     */
    public function offsetGet($offset)
    {
      return $this->InventoriedItemType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoriedItemType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoriedItemType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoriedItemType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoriedItemType Return the current element
     */
    public function current()
    {
      return current($this->InventoriedItemType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoriedItemType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoriedItemType);
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
      reset($this->InventoriedItemType);
    }

    /**
     * Countable implementation
     *
     * @return InventoriedItemType Return count of elements
     */
    public function count()
    {
      return count($this->InventoriedItemType);
    }

}
