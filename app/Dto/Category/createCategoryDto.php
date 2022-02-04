<?php

namespace App\Dto\Category;

use App\Dto\Traints\FieldDefaultDtoTraint;
use Spatie\DataTransferObject\DataTransferObject;

class createCategoryDto extends DataTransferObject{

    use FieldDefaultDtoTraint;
    public string $name;
    
    public function __construct(array $data)
    {
        $this->name = !empty($data['name']) ? $data['name'] : '';
    }

}