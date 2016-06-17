<?php

class ArrayOfServiceQuoteAdditionalChargeLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceQuoteAdditionalChargeLine[] $ServiceQuoteAdditionalChargeLine
     */
    protected $ServiceQuoteAdditionalChargeLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceQuoteAdditionalChargeLine[]
     */
    public function getServiceQuoteAdditionalChargeLine()
    {
      return $this->ServiceQuoteAdditionalChargeLine;
    }

    /**
     * @param ServiceQuoteAdditionalChargeLine[] $ServiceQuoteAdditionalChargeLine
     * @return ArrayOfServiceQuoteAdditionalChargeLine
     */
    public function setServiceQuoteAdditionalChargeLine(array $ServiceQuoteAdditionalChargeLine = null)
    {
      $this->ServiceQuoteAdditionalChargeLine = $ServiceQuoteAdditionalChargeLine;
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
      return isset($this->ServiceQuoteAdditionalChargeLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceQuoteAdditionalChargeLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceQuoteAdditionalChargeLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceQuoteAdditionalChargeLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceQuoteAdditionalChargeLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceQuoteAdditionalChargeLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceQuoteAdditionalChargeLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceQuoteAdditionalChargeLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceQuoteAdditionalChargeLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceQuoteAdditionalChargeLine);
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
      reset($this->ServiceQuoteAdditionalChargeLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceQuoteAdditionalChargeLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceQuoteAdditionalChargeLine);
    }

}
