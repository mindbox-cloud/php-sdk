<?php


namespace Mindbox\DTO\V3\Responses;

use Mindbox\DTO\V3\CustomFieldDTO;
use Mindbox\DTO\V3\ProductDTO;

/**
 * Class ProductResponseDTO
 *
 * @package Mindbox\DTO\V3\Responses
 * @property CategoryResponseCollection $categories
 **/
class ProductResponseDTO extends ProductIdentityResponseDTO
{
    use ProductDTO, CustomFieldDTO;

    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'categories' => CategoryResponseCollection::class,
    ];

    /**
     * @return CategoryResponseCollection
     */
    public function getCategories()
    {
        return $this->getField('categories');
    }
}
