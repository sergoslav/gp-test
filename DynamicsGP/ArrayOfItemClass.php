<?php

class ArrayOfItemClass implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemClass[] $ItemClass
     */
    protected $ItemClass = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemClass[]
     */
    public function getItemClass()
    {
      return $this->ItemClass;
    }

    /**
     * @param ItemClass[] $ItemClass
     * @return ArrayOfItemClass
     */
    public function setItemClass(array $ItemClass = null)
    {
      $this->ItemClass = $ItemClass;
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
      return isset($this->ItemClass[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemClass
     */
    public function offsetGet($offset)
    {
      return $this->ItemClass[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemClass $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemClass[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemClass[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemClass Return the current element
     */
    public function current()
    {
      return current($this->ItemClass);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemClass);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemClass);
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
      reset($this->ItemClass);
    }

    /**
     * Countable implementation
     *
     * @return ItemClass Return count of elements
     */
    public function count()
    {
      return count($this->ItemClass);
    }

}
