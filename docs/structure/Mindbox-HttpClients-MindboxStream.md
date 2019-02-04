Mindbox\HttpClients\MindboxStream
===============

Абстракция, инкапсулирующая все используемые в классе стандартные методы PHP. Позволяет создать заглушку для
тестирования вне зависимости от реального окружения.

Class MindboxStream


* Class name: MindboxStream
* Namespace: Mindbox\HttpClients





Properties
----------


### $stream

    protected resource $stream





* Visibility: **protected**


### $rawHeaders

    protected array $rawHeaders





* Visibility: **protected**


Methods
-------


### contextCreate

    mixed Mindbox\HttpClients\MindboxStream::contextCreate($options)

Создание контекста потока.



* Visibility: **public**


#### Arguments
* $options **mixed**



### fileGetContents

    string Mindbox\HttpClients\MindboxStream::fileGetContents(string $url)

Отправка запроса и установка заголовков ответа. Возвращает тело ответа.



* Visibility: **public**


#### Arguments
* $url **string** - &lt;p&gt;URL запроса.&lt;/p&gt;



### setRawHeaders

    mixed Mindbox\HttpClients\MindboxStream::setRawHeaders(array $rawHeaders)

Сеттер для $rawHeaders.



* Visibility: **private**


#### Arguments
* $rawHeaders **array**



### getRawHeaders

    array Mindbox\HttpClients\MindboxStream::getRawHeaders()

Геттер для $rawHeaders.



* Visibility: **public**



