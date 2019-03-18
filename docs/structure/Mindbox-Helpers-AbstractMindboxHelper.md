Mindbox\Helpers\AbstractMindboxHelper
===============

Абстрактный класс, содержащий общие для всех хелперов методы.

Class AbstractMindboxHelper


* Class name: AbstractMindboxHelper
* Namespace: Mindbox\Helpers
* This is an **abstract** class





Properties
----------


### $client

    protected \Mindbox\Clients\AbstractMindboxClient $client





* Visibility: **protected**


Methods
-------


### __construct

    mixed Mindbox\Helpers\AbstractMindboxHelper::__construct(\Mindbox\Clients\AbstractMindboxClient $client)

Конструктор AbstractMindboxHelper.



* Visibility: **public**


#### Arguments
* $client **[Mindbox\Clients\AbstractMindboxClient](Mindbox-Clients-AbstractMindboxClient.md)** - &lt;p&gt;Экземпляр клиента Mindbox.&lt;/p&gt;



### createOperation

    \Mindbox\DTO\V3\OperationDTO Mindbox\Helpers\AbstractMindboxHelper::createOperation()

Инициализация объекта OperationDTO.



* Visibility: **protected**




### getLastResponse

    \Mindbox\MindboxResponse Mindbox\Helpers\AbstractMindboxHelper::getLastResponse()

Возвращает экземпляр последнего ответа от Mindbox.



* Visibility: **public**




### sendRequest

    \Mindbox\MindboxResponse Mindbox\Helpers\AbstractMindboxHelper::sendRequest()





* Visibility: **public**




### getRequest

    \Mindbox\MindboxRequest Mindbox\Helpers\AbstractMindboxHelper::getRequest()





* Visibility: **public**



