<?php

class ArrayOfKitComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KitComponent[] $KitComponent
     */
    protected $KitComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KitComponent[]
     */
    public function getKitComponent()
    {
      return $this->KitComponent;
    }

    /**
     * @param KitComponent[] $KitComponent
     * @return ArrayOfKitComponent
     */
    public function setKitComponent(array $KitComponent = null)
    {
      $this->KitComponent = $KitComponent;
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
      return isset($this->KitComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KitComponent
     */
    public function offsetGet($offset)
    {
      return $this->KitComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KitComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KitComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KitComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KitComponent Return the current element
     */
    public function current()
    {
      return current($this->KitComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KitComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KitComponent);
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
      reset($this->KitComponent);
    }

    /**
     * Countable implementation
     *
     * @return KitComponent Return count of elements
     */
    public function count()
    {
      return count($this->KitComponent);
    }

}
