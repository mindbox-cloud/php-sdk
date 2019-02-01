<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PageRequestDTO;

/**
 * Class PageRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PageRequestDTOTest extends DTOTest
{
    /**
     * @var PageRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PageRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'sinceDateTimeUtc' => 'some_sinceDateTimeUtc',
            'tillDateTimeUtc'  => 'some_tillDateTimeUtc',
            'pageNumber'       => 'some_pageNumber',
            'itemsPerPage'     => 'some_itemsPerPage',
        ];
        $this->dto = new PageRequestDTO($data);
    }

    public function testGetSinceDateTimeUtc()
    {
        $field = $this->dto->getSinceDateTimeUtc();

        $this->assertSame('some_sinceDateTimeUtc', $field);
    }

    public function testSetSinceDateTimeUtc()
    {
        $this->dto->setSinceDateTimeUtc('new_sinceDateTimeUtc');
        $field = $this->dto->getSinceDateTimeUtc();

        $this->assertSame('new_sinceDateTimeUtc', $field);
    }

    public function testGetTillDateTimeUtc()
    {
        $field = $this->dto->getTillDateTimeUtc();

        $this->assertSame('some_tillDateTimeUtc', $field);
    }

    public function testSetTillDateTimeUtc()
    {
        $this->dto->setTillDateTimeUtc('new_tillDateTimeUtc');
        $field = $this->dto->getTillDateTimeUtc();

        $this->assertSame('new_tillDateTimeUtc', $field);
    }

    public function testGetPageNumber()
    {
        $field = $this->dto->getPageNumber();

        $this->assertSame('some_pageNumber', $field);
    }

    public function testSetPageNumber()
    {
        $this->dto->setPageNumber('new_pageNumber');
        $field = $this->dto->getPageNumber();

        $this->assertSame('new_pageNumber', $field);
    }

    public function testGetItemsPerPage()
    {
        $field = $this->dto->getItemsPerPage();

        $this->assertSame('some_itemsPerPage', $field);
    }

    public function testSetItemsPerPage()
    {
        $this->dto->setItemsPerPage('new_itemsPerPage');
        $field = $this->dto->getItemsPerPage();

        $this->assertSame('new_itemsPerPage', $field);
    }
}
