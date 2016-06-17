<?php

class ArrayOfPurchaseUserDefined implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseUserDefined[] $PurchaseUserDefined
     */
    protected $PurchaseUserDefined = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseUserDefined[]
     */
    public function getPurchaseUserDefined()
    {
      return $this->PurchaseUserDefined;
    }

    /**
     * @param PurchaseUserDefined[] $PurchaseUserDefined
     * @return ArrayOfPurchaseUserDefined
     */
    public function setPurchaseUserDefined(array $PurchaseUserDefined = null)
    {
      $this->PurchaseUserDefined = $PurchaseUserDefined;
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
      return isset($this->PurchaseUserDefined[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseUserDefined
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseUserDefined[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseUserDefined $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseUserDefined[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseUserDefined[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseUserDefined Return the current element
     */
    public function current()
    {
      return current($this->PurchaseUserDefined);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseUserDefined);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseUserDefined);
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
      reset($this->PurchaseUserDefined);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseUserDefined Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseUserDefined);
    }

}
