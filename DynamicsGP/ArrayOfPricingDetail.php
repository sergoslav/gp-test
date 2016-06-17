<?php

class ArrayOfPricingDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PricingDetail[] $PricingDetail
     */
    protected $PricingDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PricingDetail[]
     */
    public function getPricingDetail()
    {
      return $this->PricingDetail;
    }

    /**
     * @param PricingDetail[] $PricingDetail
     * @return ArrayOfPricingDetail
     */
    public function setPricingDetail(array $PricingDetail = null)
    {
      $this->PricingDetail = $PricingDetail;
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
      return isset($this->PricingDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PricingDetail
     */
    public function offsetGet($offset)
    {
      return $this->PricingDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PricingDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PricingDetail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PricingDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PricingDetail Return the current element
     */
    public function current()
    {
      return current($this->PricingDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PricingDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PricingDetail);
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
      reset($this->PricingDetail);
    }

    /**
     * Countable implementation
     *
     * @return PricingDetail Return count of elements
     */
    public function count()
    {
      return count($this->PricingDetail);
    }

}
