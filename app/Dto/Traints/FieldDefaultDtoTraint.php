<?php
namespace App\Dto\Traints;

trait FieldDefaultDtoTraint
{
    protected ?string $id = null;
    /**
     * setId
     *
     * @param  string $id
     * @return void
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }
  
    public function getId(): ?string
    {
        return $this->id;
    }
}