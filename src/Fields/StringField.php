<?php


namespace Farhoudi\Admin\Fields;


use Farhoudi\Admin\AdminField;

class StringField extends AdminField
{
    private int $maxLength;

    public function __construct(int $maxLength)
    {
        $this->maxLength = $maxLength;
    }

}
