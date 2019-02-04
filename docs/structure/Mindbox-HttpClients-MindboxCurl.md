Mindbox\HttpClients\MindboxCurl
===============

Абстракция, инкапсулирующая все используемые в классе методы библиотеки cURL. Позволяет создать заглушку для
тестирования вне зависимости от реального окружения.

Class MindboxCurl


* Class name: MindboxCurl
* Namespace: Mindbox\HttpClients





Properties
----------


### $curl

    protected resource $curl





* Visibility: **protected**


Methods
-------


### init

    mixed Mindbox\HttpClients\MindboxCurl::init()

Инициализация сеанса cURL.



* Visibility: **public**




### setOptArray

    mixed Mindbox\HttpClients\MindboxCurl::setOptArray(array $options)

Установка массива параметров для сеанса cURL.



* Visibility: **public**


#### Arguments
* $options **array** - &lt;p&gt;Параметры.&lt;/p&gt;



### exec

    mixed Mindbox\HttpClients\MindboxCurl::exec()

Выполнение запроса cURL.



* Visibility: **public**




### close

    mixed Mindbox\HttpClients\MindboxCurl::close()

Завершение сеанса cURL.



* Visibility: **public**




### errno

    mixed Mindbox\HttpClients\MindboxCurl::errno()

Возвращает код ошибки cURL.



* Visibility: **public**




### error

    mixed Mindbox\HttpClients\MindboxCurl::error()

Возвращает текст ошибки cURL.



* Visibility: **public**



