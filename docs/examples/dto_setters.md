# Пример работы сеттеров DTO Mindbox

DTO в Mindbox SDK используются для упрощения формирования тела запроса и работы с ответом от Mindbox API.

Для наиболее чсто используемых полей в DTO реализованы методы по установке значений.
Для тех полей, которые не описаны в DTO можно использовать универсальный метод ::setField.

Любая DTO может быть сериализована в XML или JSON.

## Пример

``` php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$operation = new \Mindbox\DTO\OperationDTO();

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setFirstName('some_firstName');
$customer->setMiddleName('some_middleName');
$customer->setLastName('some_lastName');
$customer->setMobilePhone('some_mobilePhone');

$subscriptionsData = [
    [
        'pointOfContact' => 'some_pointOfContact',
        'topic'          => 'some_topic',
    ],
    [
        'pointOfContact' => 'second_pointOfContact',
        'topic'          => 'second_topic',
    ],
];

$subscriptionsCollection = [];
foreach ($subscriptionsData as $subscriptionsDatum) {
    $subscription = new \Mindbox\DTO\V3\Requests\SubscriptionRequestDTO();
    $subscription->setPointOfContact($subscriptionsDatum['pointOfContact']);
    $subscription->setTopic($subscriptionsDatum['topic']);
    $subscriptionsCollection[] = $subscription;
}
$subscriptions = new \Mindbox\DTO\V3\Requests\SubscriptionRequestCollection($subscriptionsCollection);
$customer->setSubscriptions($subscriptions);

$operation->setCustomer($customer);

echo 'XML:'. PHP_EOL;
echo $operation->toXML();
echo 'JSON:'. PHP_EOL;
echo $operation->toJson();
```

Вывод:
``` php
XML:
<?xml version="1.0" encoding="utf-8"?>
<operation>
    <customer>
        <firstName>some_firstName</firstName>
        <middleName>some_middleName</middleName>
        <lastName>some_lastName</lastName>
        <mobilePhone>some_mobilePhone</mobilePhone>
        <subscriptions>
            <subscription>
                <pointOfContact>some_pointOfContact</pointOfContact>
                <topic>some_topic</topic>
            </subscription>
            <subscription>
                <pointOfContact>second_pointOfContact</pointOfContact>
                <topic>second_topic</topic>
            </subscription>
        </subscriptions>
    </customer>
</operation>

JSON:
{
    "customer": {
        "firstName":"some_firstName",
        "middleName":"some_middleName",
        "lastName":"some_lastName",
        "mobilePhone":"some_mobilePhone",
        "subscriptions":[
            {
                "pointOfContact":"some_pointOfContact",
                "topic":"some_topic"
            },
            {
                "pointOfContact":"second_pointOfContact",
                "topic":"second_topic"
            }
        ]
    }
}
```

Вы можете использовать метод ::setField для установки тех полей, для которых не реализованы методы.

Пример:

``` php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$operation = new \Mindbox\DTO\OperationDTO();

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setFirstName('some_firstName');
$customer->setMiddleName('some_middleName');
$customer->setField('someField', 'someValue');
$customer->setField('someArrayField', [
    'arrayField1'  => 'arrayField1Value',
    'arrayField2'  => 'arrayField2Value',
]);

$customer->setField('someArrayFieldsWithNameByDefault', [
    [
        'firstArrayField'  => 'firstArrayFieldValue'
    ],
    [
        'secondArrayField' => 'secondArrayFieldValue'
    ],
]);

$customer->setField('someArrayFields', [
    [
        'firstArrayField'  => 'firstArrayFieldValue'
    ],
    [
        'secondArrayField' => 'secondArrayFieldValue'
    ],
    '@itemName' => 'someArrayField',
]);

$operation->setCustomer($customer);

echo 'XML:'. PHP_EOL;
echo $operation->toXML();
echo 'JSON:'. PHP_EOL;
echo $operation->toJson();
```

Вывод:
``` php
XML:
<?xml version="1.0" encoding="utf-8"?>
<operation>
    <customer>
        <firstName>some_firstName</firstName>
        <middleName>some_middleName</middleName>
        <someField>someValue</someField>
        <someArrayField>
            <arrayField1>arrayField1Value</arrayField1>
            <arrayField2>arrayField2Value</arrayField2>
        </someArrayField>
        <someArrayFieldsWithNameByDefault>
            <value>
                <firstArrayField>firstArrayFieldValue</firstArrayField>
            </value>
            <value>
                <secondArrayField>secondArrayFieldValue</secondArrayField>
            </value>
        </someArrayFieldsWithNameByDefault>
        <someArrayFields>
            <someArrayField>
                <firstArrayField>firstArrayFieldValue</firstArrayField>
            </someArrayField>
            <someArrayField>
                <secondArrayField>secondArrayFieldValue</secondArrayField>
            </someArrayField>
        </someArrayFields>
    </customer>
</operation>

JSON:
{
    "customer":{
        "firstName":"some_firstName",
        "middleName":"some_middleName",
        "someField":"someValue",
        "someArrayField":{
            "arrayField1":"arrayField1Value",
            "arrayField2":"arrayField2Value"
        },
        "someArrayFieldsWithNameByDefault":[
            {
                "firstArrayField":"firstArrayFieldValue"
            },
            {
                "secondArrayField":"secondArrayFieldValue"
            }
        ],
        "someArrayFields":[
            {
                "firstArrayField":"firstArrayFieldValue"
            },
            {
                "secondArrayField":"secondArrayFieldValue"
            }
        ]
    }
}
```