<?php

namespace RadHam;

class Twine
{
    /**
     * Internal string storage for the object.
     *
     * @var string
     */
    protected $_str;

    /**
     * Create a new Twine instance.
     *
     * @return void
     */
    public function __construct($str)
    {
        $this->_str = $str;
    }

    /**
     * Automatically called when cast to string.
     *
     * @link   http://php.net/manual/en/language.oop5.magic.php#object.tostring
     * @return string
     */
    public function __toString()
    {
        return $this->_str;
    }

    /**
     * Factory method yo!
     *
     * @param  string $str String to return
     * @return string      Returns the instantiated object
     */
    public static function factory($str)
    {
        return new self($str);
    }

    /**
     * Echo the string contents with an end of line character appended.
     *
     * @return $this
     */
    public function printLn()
    {
        echo $this->_str, \PHP_EOL;

        return $this;
    }

    /**
     * Remove the provided context from the string.
     *
     * @param  string $context
     * @return $this
     */
    public function remove($context)
    {
        $this->replace($context, '');

        return $this;
    }

    /**
     * Replace the provided context with the provided replacement.
     *
     * @param  string $context
     * @param  string $replacement
     * @return $this
     */
    public function replace($context, $replacement)
    {
        /* str_replace(search, replace, subject) */
        $this->_str = str_replace($context, $replacement, $this->_str);

        return $this;
    }

    /**
     * Trim the string.
     *
     * @return $this
     */
    public function trim()
    {
        dump($this->_str);
        $this->_str = trim($this->_str);

        return $this;
    }
}
