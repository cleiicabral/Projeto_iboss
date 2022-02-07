<?php

namespace App\Dto\Product;

use Spatie\DataTransferObject\DataTransferObject;
use App\Dto\Traints\FieldDefaultDtoTraint;
use PhpParser\Node\Expr\Cast\Double;

class createProductDto extends DataTransferObject
{

    use FieldDefaultDtoTraint;
    public string $name;
    public float $price;
    public string $description;
    public int $quantity;
    public int $idCategories;

    public function __construct(array $data)
    {
        
        $this->name = !empty($data['name']) ? $data['name'] : '';
        $this->price = !empty($data['price']) ? $data['price'] : 0;
        $this->description = !empty($data['description']) ? $data['description'] : '';
        $this->quantity = !empty($data['quantity']) ? $data['quantity']: 0;
        $this->idCategories = !empty($data['idCategories']) ? $data['idCategories']: 0;

    }

}