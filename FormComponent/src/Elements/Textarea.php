<?php
/**
 * Created by PhpStorm.
 * User: aflores
 * Date: 28/10/18
 * Time: 18:38
 */

namespace FormComponent\FormComponent\Elements;


class Textarea extends Element
{

    private $rows;

    /**
     * Input constructor.
     * @param string $name
     * @param string $placeholder
     * @param string $label
     * @param int $rows
     * @internal param int $order
     * @internal param string $type
     */
    public function __construct($name = '', $placeholder = '', $label = '', $rows = 3)
    {
        $this->setName($name);
        $this->setLabel($label);
        $this->setPlaceholder($placeholder);
        $this->setType(self::TYPE_TEXTAREA);
        $this->setRows($rows);
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

}