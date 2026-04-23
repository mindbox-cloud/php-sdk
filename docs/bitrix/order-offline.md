# Офлайн-создание заказа в Mindbox (`SaveOfflineOrder`)

Операция `**Website.SaveOfflineOrder**` передаёт в Mindbox заказ, оформленный **без онлайн-процессинга** (типовой сценарий — догоняющая синхронизация после того, как сайт завершил заказ при недоступности API). По контракту операции в Mindbox выполняется сохранение заказа и **начисление баллов**.

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`). Состав заказа в DTO собирается так же, как для [обычного создания заказа](./order-create.md) (`OrderCreateRequestDTO`, строки, покупатель).

---

## Параметры интеграции (типовые)


| Параметр         | Значение                                                                            |
| ---------------- | ----------------------------------------------------------------------------------- |
| Операция Mindbox | `Website.SaveOfflineOrder`                                                          |
| Описание         | Сохраняет заказ в Mindbox и начисляет баллы (по настройке операции в проекте)       |
| Хелпер SDK       | `$mindbox->order()->saveOfflineOrder($order, $operationName)`                       |
| DeviceUUID       | В текущей версии SDK запрос формируется **без** DeviceUUID (`addDeviceUUID: false`) |
| Синхронность     | **Асинхронно** (`isSync: false`) — зашито в `OrderHelper::saveOfflineOrder()`       |


Сигнатура:

```php
public function saveOfflineOrder(OrderCreateRequestDTO $order, $operationName)
```

Документация Mindbox: [processing offline order](https://developers.mindbox.ru/docs/processing-offline-order).

---

## Процессинг при недоступности Mindbox

Пока Mindbox **недоступен**, на сайте **недоступны** расчёт персональных скидок в Mindbox, **оплата бонусами**, применение **промокодов** и прочие возможности, завязанные на оперативный ответ API. **Заказ при этом можно оформить** по **базовым ценам** каталога (и собственным правилам Битрикс, если они не требуют Mindbox).

После восстановления связи или фоном нужно **догнать** данные в Mindbox — для этого и используется `**SaveOfflineOrder`** (или согласованная с менеджером альтернатива).

---

## Рекомендация: очередь в Битрикс и агент

Имеет смысл **не терять** неотправленные вызовы `SaveOfflineOrder`:

- Сохраняйте в **highload-блоке** (или другой удобной сущности) записи вида: идентификатор заказа Битрикс, сериализованное тело/параметры для Mindbox, число попыток, время следующей отправки, статус.
- Подключите **агент** Битрикс (или cron + скрипт), который **раз в 15 минут** выбирает записи к отправке и вызывает `saveOfflineOrder` + `sendRequest()`. При успехе помечайте запись выполненной; при ошибке увеличивайте счётчик попыток и откладывайте следующий запуск.
- Не храните в HL **секреты** и избыточные ПДн; логируйте ошибки без утечки данных в публичную зону.

---

## Пример вызова SDK

Тот же `OrderCreateRequestDTO`, что и для `CreateAuthorizedOrder` / `CreateUnauthorizedOrder` — см. [создание заказа](./order-create.md).

```php
<?php

use Mindbox\DTO\V3\Requests\OrderCreateRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

/** @var OrderCreateRequestDTO $orderDto — заполненный заказ */

try {
    $response = getMindboxClient()
        ->order()
        ->saveOfflineOrder($orderDto, 'Website.SaveOfflineOrder')
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Оставить запись в очереди HL для следующего прогона агента через 15 минут; залогировать.
}
```

---

- См. [OrderHelper в общих примерах SDK](../examples/order_helper.md), [исключения SDK](../examples/exceptions.md).

