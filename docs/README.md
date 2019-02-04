# Mindbox PHP SDK

Mindbox PHP SDK - это библиотека инкапсулирующая детали сетевого взаимодействия и нюансы реализации API Mindbox от конечного разработчика.

Ключевые возможности библиотеки:
* Поддержка двух версий API: v2.1, v3;
* Отправка произвольных запросов к API Mindbox (POST и GET запросы);
* Удобные обёртки для наиболее часто используемых операций Mindbox;
* Логирование запросов и ответов API;
* Синхронные и асинхронные вызовы операций для API v3;
* Возможность подключить собственный логгер (реализующий \Psr\Log\LoggerInterface);
* Возможность выбора HTTP клиента: [PHP cURL](http://php.net/manual/ru/book.curl.php), [PHP Stream](http://php.net/manual/ru/book.stream.php).

С полной документацией API Mindbox можно ознакомиться [здесь](https://developers.mindbox.ru/docs/v3).

Для начала работы с Mindbox SDK ознакомтесь с [Гайдом по установке и настройке Mindbox PHP SDK](./getting_started.md), а также с примерами использования SDK, приведёнными ниже.

---

## Примеры использования SDK

- **Формирование тела запроса**
    - [Установка тела запроса через конструктор DTO](./examples/dto_constructor.md)
    - [Установка тела запроса через сеттеры DTO](./examples/dto_setters.md)
    - [Формирование тела запроса без использования DTO](./examples/send_prepared_request.md)
- **Универсальные методы отправки запросов**
    - [Отправка запросов на Mindbox API v2.1](./examples/send_request_to_v2.md)
    - [Отправка запросов на Mindbox API v3](./examples/send_request_to_v3.md)
- **Хелперы для стандартных операций Mindbox**
    - [Операции над потребителем](./examples/customer_helper.md)
    - [Операции связанные с процессингом заказов](./examples/order_helper.md)
    - [Операции связанные с обновлением списка продуктов в корзине](./examples/product_list_helper.md)
- **Работа с ответом от Mindbox**
    - [Доступные методы для работы с ответом](./examples/response.md)
    - [Список возможных исключений при отправке запроса](./examples/exceptions.md)

## Справочник API SDK

Полный список классов и методов SDK доступен по [ссылке](./structure/ApiIndex.md).