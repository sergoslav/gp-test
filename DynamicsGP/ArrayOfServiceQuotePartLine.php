<?php

class ArrayOfServiceQuotePartLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceQuotePartLine[] $ServiceQuotePartLine
     */
    protected $ServiceQuotePartLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceQuotePartLine[]
     */
    public function getServiceQuotePartLine()
    {
      return $this->ServiceQuotePartLine;
    }

    /**
     * @param ServiceQuotePartLine[] $ServiceQuotePartLine
     * @return ArrayOfServiceQuotePartLine
     */
    public function setServiceQuotePartLine(array $ServiceQuotePartLine = null)
    {
      $this->ServiceQuotePartLine = $ServiceQuotePartLine;
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
      return isset($this->ServiceQuotePartLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceQuotePartLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceQuotePartLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceQuotePartLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceQuotePartLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceQuotePartLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceQuotePartLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceQuotePartLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceQuotePartLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceQuotePartLine);
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
      reset($this->ServiceQuotePartLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceQuotePartLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceQuotePartLine);
    }

}
