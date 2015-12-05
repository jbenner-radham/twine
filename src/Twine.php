<?php

namespace RadHam;

class Twine
{
    /**
     * [$_str description]
     * @var string
     */
    protected $_str;

    /**
     * Create a new Twine instance
     */
    public function __construct($str)
    {
        $this->_str = $str;
    }

    /**
     * [__toString description]
     * @return string [description]
     * @link http://php.net/manual/en/language.oop5.magic.php#object.tostring
     */
    public function __toString()
    {
        return $this->_str;
    }

    /**
     * Factory method yo!
     *
     * @param string $str String to return
     *
     * @return string Returns the instantiated object
     */
    public static function factory($str)
    {
        return new self($str);
    }

    /**
     * [printLn description]
     * @return [type] [description]
     */
    public function printLn()
    {
        echo $this->_str, \PHP_EOL;

        return $this;
    }

    /**
     * [remove description]
     * @param  [type] $context [description]
     * @return [type]          [description]
     */
    public function remove($context)
    {
        $this->replace($context, '');

        return $this;
    }

    /**
     * [replace description]
     * @param  [type] $context     [description]
     * @param  [type] $replacement [description]
     * @return [type]              [description]
     */
    public function replace($context, $replacement)
    {
        /* str_replace(search, replace, subject) */
        $this->_str = str_replace($context, $replacement, $this->_str);

        return $this;
    }

    /**
     * [trim description]
     * @return [type] [description]
     */
    public function trim()
    {
        dump($this->_str);
        $this->_str = trim($this->_str);

        return $this;
    }
}
