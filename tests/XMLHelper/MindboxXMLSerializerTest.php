<?php

namespace Mindbox\Tests\XMLHelper;

use Mindbox\DTO\DTO;
use Mindbox\XMLHelper\MindboxXMLSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Class MindboxXMLSerializerTest
 * @package Mindbox\Tests\XMLHelper
 */
class MindboxXMLSerializerTest extends TestCase
{
    /**
     * @return array
     */
    public function xmlDataProvider()
    {
        return [
            [
                '<?xml version="1.0" encoding="utf-8"?><order><customer><authenticationTicket>{Секретный тикет}</authenticationTicket><ids><webSiteUserId>{Идентификатор потребителя}</webSiteUserId></ids><email>{Емэйл потребителя}</email><mobilePhone>{Мобильный телефон}</mobilePhone><lastName>{Фамилия потребителя}</lastName><firstName>{Имя потребителя}</firstName><birthDate>{Дата рождения в формате YYYY-MM-DD}</birthDate><password>{Пароль}</password><subscriptions><subscription><pointOfContact>{Канал коммуникации Email/SMS/тд}</pointOfContact><topic>{Тематика рассылок}</topic><isSubscribed>{Статус подписки true/false}</isSubscribed></subscription><subscription><pointOfContact>{Канал коммуникации Email/SMS/тд}</pointOfContact><topic>{Тематика рассылок}</topic><isSubscribed>{Статус подписки true/false}</isSubscribed></subscription></subscriptions><customFields><someField>{Значение дополнительного поля}</someField></customFields></customer></order>',
            ],
            [
                '<?xml version="1.0" encoding="utf-8"?><order><lines><line><quantity>3</quantity></line><line><quantity>125</quantity></line></lines><discounts><discount><type>promoCode</type><id>00000CS69A</id><amount>243</amount></discount><discount><type>balance</type><amount>1398</amount><balanceType><ids><systemName>Base</systemName></ids></balanceType></discount></discounts></order>',
            ],
            [
                '<?xml version="1.0" encoding="utf-8"?><order><lines><line><quantity>3</quantity></line></lines><discounts><discount><type>promoCode</type><id>00000CS69A</id><amount>243</amount></discount></discounts></order>',
            ],
            [
                '<?xml version="1.0" encoding="utf-8"?><order><lines><line><quantity>3</quantity><discounts><discount><type>promoCode</type><id>00000CS69A</id><amount>243</amount></discount></discounts></line></lines></order>',
            ],
            [
                '<?xml version="1.0" encoding="utf-8"?><order><lines><line><quantity>3</quantity><discounts><discount><type>promoCode</type><id>00000CS69A</id><amount>243</amount></discount><discount><type>balance</type><amount>1398</amount><balanceType><ids><systemName>Base</systemName></ids></balanceType></discount></discounts></line></lines></order>',
            ],
        ];
    }

    /**
     * @return array
     */
    public function arrayDataProvider()
    {
        return [
            [
                [
                    'customer' => [
                        'authenticationTicket' => '{Секретный тикет}',
                        'ids'                  => [
                            'webSiteUserId' => '{Идентификатор потребителя}',
                        ],
                        'email'                => '{Емэйл потребителя}',
                        'mobilePhone'          => '{Мобильный телефон}',
                        'lastName'             => '{Фамилия потребителя}',
                        'firstName'            => '{Имя потребителя}',
                        'birthDate'            => '{Дата рождения в формате YYYY-MM-DD}',
                        'password'             => '{Пароль}',
                        'subscriptions'        => [
                            [
                                'pointOfContact' => '{Канал коммуникации Email/SMS/тд}',
                                'topic'          => '{Тематика рассылок}',
                                'isSubscribed'   => '{Статус подписки true/false}',
                            ],
                            [
                                'pointOfContact' => '{Канал коммуникации Email/SMS/тд}',
                                'topic'          => '{Тематика рассылок}',
                                'isSubscribed'   => '{Статус подписки true/false}',
                            ],
                            DTO::XML_ITEM_NAME_INDEX => 'subscription',
                        ],
                        'customFields'         => [
                            'someField' => '{Значение дополнительного поля}',
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @dataProvider xmlDataProvider
     *
     * @param string $initialXml
     */
    public function testFromArrayToXML($initialXml)
    {
        $serializer = new MindboxXMLSerializer();
        $array      = $serializer->fromXMLToArray($initialXml);
        $xml        = MindboxXMLSerializer::fromArrayToXML(key($array), current($array));

        $xml2 = simplexml_load_string($initialXml, "SimpleXMLElement", LIBXML_NOCDATA)->asXML();
        $this->assertSame($xml2, $xml);
    }

    /**
     * @dataProvider arrayDataProvider
     *
     * @param array $initialArray
     */
    public function testFromXMLToArray($initialArray)
    {
        $serializer = new MindboxXMLSerializer();
        $xml        = MindboxXMLSerializer::fromArrayToXML(key($initialArray), current($initialArray));
        $array      = $serializer->fromXMLToArray($xml);

        $this->assertSame($initialArray, $array);
    }

    public function testFromArrayToXMLWithIncorrectXml()
    {
        $serializer = new MindboxXMLSerializer();
        $array      = $serializer->fromXMLToArray('this is not xml');

        $this->assertSame([], $array);
    }
}
