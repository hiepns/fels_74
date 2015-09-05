<?php

use SleepingOwl\Admin\Columns\Column\BaseColumn;

class Arrays extends BaseColumn {

    protected $orderBy, $index = 0, $trueAns = false;

    public function orderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function getOrderBy()
    {
        if (!is_null($this->orderBy)) {
            return $this->orderBy;
        }
        return $this->name;
    }

    protected function getAttributesForCell($instance)
    {
        if (!is_null($this->orderBy)) {
            return ['data-order' => $this->valueFromInstance($instance, $this->orderBy)];
        }
        return [];
    }

    public function isSortable()
    {
        $sortable = $this->sortable !== false;
        if ($this->modelItem->isWithJoinEnabled()) {
            return $sortable;
        }
        return $sortable && strpos($this->name, '.') === false;
    }

    public function render($instance, $totalCount, $content = null)
    {
        $list = $this->valueFromInstance($instance, $this->name);
        if ($list == null) {
            return;
        }
        if ($this->trueAns) {
            for ($i = 0; $i < count($list); $i++) {
                if ($list[$i] == 1) {
                    $content = $i+1;
                    break;
                }
            }
        } else {
            $content = $list[$this->index];
        }
        return parent::render($instance, $totalCount, $content);
    }

    public function at($index)
    {
        $this->index = $index;
    }

    public function getTrueAns()
    {
        $this->trueAns = true;
    }
}
