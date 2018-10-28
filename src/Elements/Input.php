<?php
/**
 * Created by PhpStorm.
 * User: aflores
 * Date: 28/10/18
 * Time: 17:44
 */

namespace FormComponent\Elements;

class Input extends Element
{

    private $value;

    /**
     * Input constructor.
     * @param string $type
     * @param string $name
     * @param string $placeholder
     * @param string $label
     * @param string $value
     */
    public function __construct($type = self::TYPE_TEXT, $name = '', $placeholder = '', $label = '', $value = null)
    {
        $this->setName($name);
        $this->setLabel($label);
        $this->setPlaceholder($placeholder);
        $this->setType($type);
        $this->setValue($value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}