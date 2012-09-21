<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/ru/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Название сайта';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Введите название сайта.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'Адрес электронной почты системного администратора';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Автоматически-созданные сообщения (напр. электронные письма активации или подписные электронные письма подтверждения) будут отправлены на этот адрес.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Формат даты';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Введите формат даты, используемый функцией PHP date()';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Формат времени';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Введите формат времени, используемый функцией PHP date()';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Формат даты и времени';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Введите формат даты и времени, используемый функцией PHP date()';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Часовой пояс';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Выберите часовой пояс сервера.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Относительный путь к каталогу Contao';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Относительный путь к каталогу Contao, обычно устанавливается автоматически при помощи мастера установки Contao. Например, если вы используете панель управления по адресу <em>www.yourdomain.com/yourwebsite/contao</em>, то относительный путь должен быть <em>/yourwebsite</em>.';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Кодировка символов';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Укажите кодировку системы. Рекомендуется использовать UTF-8 кодировку, для правильного отображения специальных символов. Не изменяйте кодировку, если не сталкиваетесь с ошибками в отображении контента.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Пользовательские секции макета';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Здесь можно ввести через запятую список пользовательских секций макета.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Отключить планировщик команд';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Отключить планировщик команд и выполнять сценарий cron.php (необходимо установить вручную).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Минимизировать разметку';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Минимизировать HTML разметку перед отправкой в браузер (необходимо расширение PHP tidy).';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Сжимать скрипты';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Создать сжатую версию объединенных CSS и/или JavaScript файлов. Требует корректировки .htaccess файла.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Элементов на странице';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Вы можете определить количество элементов на странице выводимых в панели управления.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Максимальное число элементов на странице';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Это общее ограничение вступает в силу, если пользователь выбирает значение \'Показать все записи\'.';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Не обрезать элементы';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Не обрезать элементы контента и другие ресурсы при показе в панели управления.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'Суффикс URL';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'URL суффиксом является расширение файла, которое добавляется к URI строки для моделирования статических документов. По умолчанию URI суффиксом является <em>.html</em>. URL без суффикса может оказать негативное воздействие на рейтинг сайта в поисковых системах.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Режим кэширования';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Вы можете выбрать режим кэширования.';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Анонимизировать IP-адреса';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Анонимизировать (скрывать) любой IP-адрес, который хранится в базе данных, за исключением таблицы <em>tl_session</em> (IP-адрес привязан к сессии по соображениям безопасности).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Анонимизировать Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Анонимизировать (скрывать) IP-адреса, которые направляются в Google Analytics.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Перезаписать URL';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Вы можете позволить Contao создавать статичные URL без "index.php" (напр. <em>alias.html</em> вместо <em>index.php/alias.html</em>). Функция требует включенного модуля Apache - <em>mod_rewrite</em>! Не забудьте переименовать файл ".htaccess.default" в ".htaccess" и откорректируйте RewriteBase при необходимости.';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Добавить язык в URL-адрес';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Добавить язык как первый параметр URL (напр. <em>http://domain.tld/en/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Не перенаправлять пустые URL-адреса';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'Отображать пустые URL-адреса, вместо перенаправления на корневую страницу сайта на подходящем языке (не рекомендуется).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Использовать параметр auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Пропустить <em>items/</em> или <em>events/</em> фрагменты в URL-адресе и автоматически открыть элемент в зависимости от параметра <em>auto_item</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Отключить использование алиасов страниц';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Использовать цифровые ID страницы, вместо алиасов страниц (напр. будет использоваться 12.html вместо home.html).';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Разрешенные HTML-теги';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Введите список разрешенных HTML-тегов, все прочие теги будут удаляться.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Включить режим отладки';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Если выбрать опцию, информация о запущенных процессах (напр. запрос к БД) будет выводиться на экран. Эта опция рекомендуются только при модификации системы!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Отключить запрос токенов';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Не проверять запрос токена в момент отправки формы. Внимание: потенциальный риск безопасности!';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Время блокировки учетной записи';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Учетная запись будет заблокирована, если при авторизации введен неверный пароль три раза подряд. Укажите время в секундах, в течение которого владельцу учетной записи придется ожидать перед повторной попыткой входа (по умолчанию: 5 минут = 300 секунд).';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Отображать сообщения об ошибках';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Отображать сообщения об ошибках (не рекомендуется для работающих сайтов). Эта опция рекомендуются только при модификации системы!';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Журналировать сообщения об ошибках';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Записывать сообщения об ошибках в файл журнала ошибок (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Запуск в безопасном режиме';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Запустить Contao в безопасном режиме и загрузить только основные модули.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Отключить проверку IP-адреса';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Не привязывать сессии к IP-адресам. Внимание: отключение проверки IP-адреса - это большой риск с точки зрения безопасности!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Загружаемые с сервера типы файлов';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Введите через запятую список расширений файлов разрешенных к загрузке с сервера. По соображениям безопасности, возможность загрузки с сервера ограничивается каталогом и его вложениями.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Типы графических файлов';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Введите через запятую список расширений поддерживаемых типов изображений. Не включайте в список типы файлов, которые могут быть восприняты Contao как собственные скрипты.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Доступные для редактирования типы файлов';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Введите через запятую список расширений файлов, которые могут быть доступны для редактирования в редакторе кода.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Типы файлов шаблона';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Здесь можно ввести через запятую список поддерживаемых типов файлов шаблона.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Максимальная ширина изображения';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Вы можете определить максимальную ширину изображения и медиафайлов. Если размер будет превышать заданный, он автоматически будет масштабирован.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Качество JPG миниатюр';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Задайте качество JPG миниатюр в процентах (Внимание: это применимо только для JPEG формата).';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Максимальная ширина изображения GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Вы можете ввести максимальную ширину изображения, которую библиотека GD должна попытаться обработать.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Максимальная высота изображения GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Вы можете ввести максимальную высоту изображения, которую библиотека GD должна попытаться обработать.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Каталог файлов';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Введите относительный путь к каталогу с файлами (по умолчанию: tl_files).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Загружаемые на сервер типы файлов';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Введите через запятую список расширений файлов, разрешенных к загрузке на сервер. По соображениям безопасности, возможность загрузки на сервер ограничивается каталогом и его вложениями.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Одновременных загрузок файлов на сервер';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Введите число одновременных загрузок файлов на сервер.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Максимальный размер загружаемого на сервер файла';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Введите максимально допустимый размер загружаемого на сервер файла в байтах (1 Мбайт = 1000 Кбайт = 1000000 байт).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Максимальная ширина изображения';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Введите максимально допустимую ширину загружаемого на сервер изображения в пикселах.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Максимальная высота изображения';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Введите максимально допустимую высоту загружаемого на сервер изображения в пикселах.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Включить поисковую систему';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Автоматически индексировать страницы таким образом, чтоб они могли быть найдены через поиск.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Индексировать защищенные страницы';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Используйте эту опцию с осторожностью и всегда исключайте персональные страницы из индексирования!';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Использовать SMTP для отправки почты';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Использовать SMTP-сервер вместо использования встроенной в PHP почтовой функции для отправки писем.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'SMTP-сервер';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Введите имя хоста вашего SMTP-сервера (по умолчанию - localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'Логин SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Если SMTP-сервер требует авторизацию, введите здесь логин.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'Пароль SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Если SMTP-сервер требует авторизацию, введите здесь пароль.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'SMTP шифрование';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Вы можете выбрать метод шифрования (SSL или TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'SMTP-порт';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Введите порт SMTP-сервера (по умолчанию 25 или 465 для SSL).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Неактивные модули панели управления';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Вы можете деактивировать неиспользуемые модули панели управления.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Время для отмены операции';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Введите время, в течение которого возможна отмена операции, в секундах (по умолчанию: 24 часа = 86400 секунд).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Время хранения версий';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Введите время хранения различных версий в секундах (по умолчанию: 90 дней = 7776000 секунд).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Время хранения записей в журнале';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Введите время хранения записей в журнале в секундах (по умолчанию: 14 дней = 1209600 секунд).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Время жизни сессии';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Введите максимальное время жизни сессии в секундах (по умолчанию: 60 минут = 3600 секунд). Если пользователь неактивен более указанного периода, текущая сессия будет удалена и пользователь должен будет войти заново.';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Период автоматического входа';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Вы можете настроить период автоматического входа на сайт (90 дней = 7776000 секунд).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Страница пользователя по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'По умолчанию, страница принадлежит тому же пользователю, что и родительская страница. Тем не менее, если ни один пользователь не назначен, будет использован пользователь по умолчанию. Если нет назначенного пользователя и нет пользователя по умолчанию, это не означает автоматического разрешения доступа!';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Разрешенные группы по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'По умолчанию, страница принадлежит той же группе, что и родительская страница. Тем не менее, если ни одна группа не назначена, будет использована группа по умолчанию. Если группа не назначена или нет группы по умолчанию, это не означает автоматического разрешения доступа!';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Разрешенные страницы по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'По умолчанию, страница использует те же установки разрешения, что и родительская страница. Тем не менее, если не определены установки разрешений, эти установки будут использованы по умолчанию.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'URL он-лайн обновления';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Вы можете указать URL он-лайн обновления Contao';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Название сайта';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Дата и время';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Глобальная конфигурация';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Конфигурация панели управления';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Конфигурация внешнего интерфейса';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Настройки конфиденциальности';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Настройки безопасности';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Файлы и изображения';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Настройки загрузки на сервер';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Настройки поисковой системы';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Настройки SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Неактивные модули';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Значения времени ожидания';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Права доступа по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Он-лайн обновление';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Статические ресурсы';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Редактировать локальную конфигурацию';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Использовать кэш сервера и кэш браузера';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Использовать только кэш сервера';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Использовать только кэш браузера';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Отключить кэширование';
