<?php

class ArrayOfSkillSetSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SkillSetSummary[] $SkillSetSummary
     */
    protected $SkillSetSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SkillSetSummary[]
     */
    public function getSkillSetSummary()
    {
      return $this->SkillSetSummary;
    }

    /**
     * @param SkillSetSummary[] $SkillSetSummary
     * @return ArrayOfSkillSetSummary
     */
    public function setSkillSetSummary(array $SkillSetSummary = null)
    {
      $this->SkillSetSummary = $SkillSetSummary;
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
      return isset($this->SkillSetSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SkillSetSummary
     */
    public function offsetGet($offset)
    {
      return $this->SkillSetSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SkillSetSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SkillSetSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SkillSetSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SkillSetSummary Return the current element
     */
    public function current()
    {
      return current($this->SkillSetSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SkillSetSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SkillSetSummary);
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
      reset($this->SkillSetSummary);
    }

    /**
     * Countable implementation
     *
     * @return SkillSetSummary Return count of elements
     */
    public function count()
    {
      return count($this->SkillSetSummary);
    }

}
