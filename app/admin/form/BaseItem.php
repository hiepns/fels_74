<?php
use SleepingOwl\Admin\Models\Form\Interfaces\FormItemInterface;
use SleepingOwl\Admin\Exceptions\MethodNotFoundException;

abstract class BaseItem implements FormItemInterface
{
    protected $instance;
    protected $formBuilder;
    protected $form;
    protected $name;
    protected $label;
    protected $validation = [];
    protected $attributes = [];
    protected $default = null;

    function __construct()
    {
        $this->formBuilder = Admin::instance()->formBuilder;
        if ($modelItem = ModelItem::$current) {
            $this->form = $modelItem->getForm();
        }
    }

    public function getName()
    {
        return $this->name;
    }

    protected function getValueFromForm()
    {
        return $this->form->getValueForName($this->name);
    }

    public function required()
    {
        $this->attributes(['required']);
        return $this;
    }

    public function validationRule($rule)
    {
        $rules = explode('|', $rule);
        foreach ($rules as $rule) {
            $this->validation[] = $rule;
        }
        return $this;
    }

    public function getValidationRules()
    {
        return $this->validation;
    }

    public function attributes($attributes)
    {
        $this->attributes = $attributes;
    }

    function __call($name, $arguments)
    {
        if ($name == 'default') {
            return call_user_func_array([$this, 'setDefault'], $arguments);
        }
        throw new MethodNotFoundException(get_class($this), $name);
    }

    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function updateRequestData(&$data)
    {

    }

    public function setData($name, $label)
    {
        $this->label = $label . ' ';
        $this->name = $name;
        return $this;
    }

    public function render()
    {
        AssetManager::addScript('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js');
        $this->instance = Admin::instance()->formBuilder;
    }
}
