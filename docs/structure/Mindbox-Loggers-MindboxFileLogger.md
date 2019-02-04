Mindbox\Loggers\MindboxFileLogger
===============

Класс, отвечающий за запись логов в файл стандартными средствами PHP.

Реализует интерфейс \Psr\Log\LoggerInterface.
Логгер предполагает 8 уровней критичности, определённых в PSR-3:


* Class name: MindboxFileLogger
* Namespace: Mindbox\Loggers
* Parent class: Psr\Log\AbstractLogger



Constants
----------


### DEBUG

    const DEBUG = 100





### INFO

    const INFO = 200





### NOTICE

    const NOTICE = 250





### WARNING

    const WARNING = 300





### ERROR

    const ERROR = 400





### CRITICAL

    const CRITICAL = 500





### ALERT

    const ALERT = 550





### EMERGENCY

    const EMERGENCY = 600





### LOG_FILE_NAME

    const LOG_FILE_NAME = 'mindbox.log'





Properties
----------


### $logsDirectory

    private string $logsDirectory





* Visibility: **private**


### $logLevel

    private integer $logLevel





* Visibility: **private**


### $levels

    protected array<mixed,string> $levels = array(self::DEBUG => 'DEBUG', self::INFO => 'INFO', self::NOTICE => 'NOTICE', self::WARNING => 'WARNING', self::ERROR => 'ERROR', self::CRITICAL => 'CRITICAL', self::ALERT => 'ALERT', self::EMERGENCY => 'EMERGENCY')





* Visibility: **protected**
* This property is **static**.


Methods
-------


### __construct

    mixed Mindbox\Loggers\MindboxFileLogger::__construct(string $logsDirectory, string $logLevel)

Конструктор MindboxFileLogger.



* Visibility: **public**


#### Arguments
* $logsDirectory **string** - &lt;p&gt;Путь к диретории для записи логов.&lt;/p&gt;
* $logLevel **string** - &lt;p&gt;Уровень логирования запросов.
По умолчанию логируются только ошибки:&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;код ответа 4XX;&lt;/li&gt;
&lt;li&gt;пустое тело ответа;&lt;/li&gt;
&lt;li&gt;неизвестный код ответа.&lt;/li&gt;
&lt;/ul&gt;



### setLogLevel

    mixed Mindbox\Loggers\MindboxFileLogger::setLogLevel(string|integer $logLevel)

Сеттер для $logLevel.



* Visibility: **private**


#### Arguments
* $logLevel **string|integer** - &lt;p&gt;Уровень логирования.&lt;/p&gt;



### toMindboxLogLevel

    integer Mindbox\Loggers\MindboxFileLogger::toMindboxLogLevel(string|integer $logLevel)

Перевод уровня логирования в формат понятный MindboxFileLogger.



* Visibility: **private**


#### Arguments
* $logLevel **string|integer** - &lt;p&gt;Уровень логирования, может быть задан как строкой, так и числом.&lt;/p&gt;



### validateLogsDirectory

    mixed Mindbox\Loggers\MindboxFileLogger::validateLogsDirectory()

Проверка существования и создание директории для записи логов.



* Visibility: **private**




### getFullDirPath

    string Mindbox\Loggers\MindboxFileLogger::getFullDirPath()

Возвращает полный путь до директории содержащей лог файл.



* Visibility: **private**




### getLogDirPath

    string Mindbox\Loggers\MindboxFileLogger::getLogDirPath()

Возвращает путь до директории в которую будут записаны логи в формате: mindbox/ГГГГ/ММ/ДД.



* Visibility: **public**
* This method is **static**.




### log

    mixed Mindbox\Loggers\MindboxFileLogger::log(mixed $level, string $message, array $context)

Проверка уровня логирования, формирование сообщения и запись в файл.



* Visibility: **public**


#### Arguments
* $level **mixed** - &lt;p&gt;Уровень записи.&lt;/p&gt;
* $message **string** - &lt;p&gt;Сообщение.&lt;/p&gt;
* $context **array** - &lt;p&gt;Контекст.&lt;/p&gt;



### getMessage

    string Mindbox\Loggers\MindboxFileLogger::getMessage(mixed $level, string $message, array $context)

Формирование сообщения для записи в лог.



* Visibility: **private**


#### Arguments
* $level **mixed** - &lt;p&gt;Уровень сообщения.&lt;/p&gt;
* $message **string** - &lt;p&gt;Тело сообщения.&lt;/p&gt;
* $context **array** - &lt;p&gt;Контекст.&lt;/p&gt;



### getFullPath

    string Mindbox\Loggers\MindboxFileLogger::getFullPath()

Возвращает полный путь до файла с логами.



* Visibility: **private**




### writeLog

    mixed Mindbox\Loggers\MindboxFileLogger::writeLog(string $fileName, string $record)

Запись лога в файл.



* Visibility: **private**


#### Arguments
* $fileName **string** - &lt;p&gt;Полный путь до файла.&lt;/p&gt;
* $record **string** - &lt;p&gt;Тело сообщения.&lt;/p&gt;


