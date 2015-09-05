<?php

class TextNestedItem extends BaseItem
{

    protected $total = 1;

    public function render()
    {
        parent::render();
        $result = '';
        $method = $this->name;
        $value = $this->instance->getModel()->$method()->get();
        for ($i = 1; $i <= $this->total; $i++) {
            if ($this->instance->getModel()->exists) {
                $result .=  $this->instance->textGroup($this->name . '-' . $i, $this->label . $i, $value[$i-1]->content, $this->attributes);
            } else {
                $result .=  $this->instance->textGroup($this->name . '-' . $i, $this->label . $i, null, $this->attributes);
            }
        }
        return $result;

    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}
