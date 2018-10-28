<?php

namespace FormComponent\FormComponent;

use FormComponent\FormComponent\Elements\Element;

class FormComponent
{

    const COMPONENT_PATH = 'components.form';

    private $action;

    private $elements;

    public function __construct($action = '')
    {
        $this->action = $action;
        $this->elements = collect();
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param Element $element
     * @internal param \Illuminate\Support\Collection $elements
     */
    public function addElement(Element $element)
    {
        $this->elements->push($element);
    }

}