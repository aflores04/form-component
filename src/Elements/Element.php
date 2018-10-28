<?php
/**
 * Created by PhpStorm.
 * User: aflores
 * Date: 28/10/18
 * Time: 18:15
 */

namespace FormComponent\Elements;

use FormComponent\FormComponent;

abstract class Element
{

    const TYPE_TEXT = 'text';

    const TYPE_EMAIL = 'email';

    const TYPE_PASSWORD = 'password';

    const TYPE_TEXTAREA = 'textarea';

    private $label;

    private $type = self::TYPE_TEXT;

    private $name;

    private $placeholder;

    private $component;

    /**
     * @return mixed
     */
    public function getComponent()
    {
        return FormComponent::COMPONENT_PATH . '.' . $this->getType();
    }

    /**
     * @param mixed $component
     */
    public function setComponent($component)
    {
        $this->component = $component;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

}