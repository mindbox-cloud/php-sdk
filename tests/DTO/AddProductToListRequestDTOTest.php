<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\AddProductToListRequestDTO;

/**
 * Class AddProductToListRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class AddProductToListRequestDTOTest extends DTOTest
{
    /**
     * @var AddProductToListRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = AddProductToListRequestDTO::class;

    /**
     *
     */
    public function asJsonFieldsProvider()
    {
        return array_merge(parent::asJsonFieldsProvider(), [
            [
                [
                    'product' => [
                        'someField' => 'someName'
                    ],
                ],
                '{"product":{"someField":"someName"}}',
            ],
        ]);
    }

    /**
     *
     */
    public function asXmlFieldsProvider()
    {
        return array_merge(parent::asXmlFieldsProvider(), [
            [
                [
                    'product' => [
                        'someField' => 'someName'
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><product><someField>someName</someField></product></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
        ]);
    }

    public function setUp()
    {
        $data      = [
            'product' => [
                'someField' => 'someValue',
            ],
        ];
        $this->dto = new AddProductToListRequestDTO($data);
    }

    public function testGetProduct()
    {
        $field = $this->dto->getProduct();

        $this->assertInstanceOf(\Mindbox\DTO\ProductRequestDTO::class, $field);
    }

    public function testSetProduct()
    {
        $this->dto->setProduct(['price' => 'value']);
        $field = $this->dto->getProduct();

        $this->assertInstanceOf(\Mindbox\DTO\ProductRequestDTO::class, $field);
        $this->assertSame('value', $field->getPrice());
    }
}
