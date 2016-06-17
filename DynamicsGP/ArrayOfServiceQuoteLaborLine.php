<?php

class ArrayOfServiceQuoteLaborLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceQuoteLaborLine[] $ServiceQuoteLaborLine
     */
    protected $ServiceQuoteLaborLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceQuoteLaborLine[]
     */
    public function getServiceQuoteLaborLine()
    {
      return $this->ServiceQuoteLaborLine;
    }

    /**
     * @param ServiceQuoteLaborLine[] $ServiceQuoteLaborLine
     * @return ArrayOfServiceQuoteLaborLine
     */
    public function setServiceQuoteLaborLine(array $ServiceQuoteLaborLine = null)
    {
      $this->ServiceQuoteLaborLine = $ServiceQuoteLaborLine;
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
      return isset($this->ServiceQuoteLaborLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceQuoteLaborLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceQuoteLaborLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceQuoteLaborLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceQuoteLaborLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceQuoteLaborLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceQuoteLaborLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceQuoteLaborLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceQuoteLaborLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceQuoteLaborLine);
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
      reset($this->ServiceQuoteLaborLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceQuoteLaborLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceQuoteLaborLine);
    }

}
