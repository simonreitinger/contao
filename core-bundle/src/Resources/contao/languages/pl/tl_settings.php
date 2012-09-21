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
 * @link https://www.transifex.com/projects/p/contao/language/pl/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Nazwa serisu internetowego';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Wprowadź nazwę dla twojego serwisu internetowego.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'Adres e-mail administratora systemu';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Wprowadź adres e-mail administratora systemu.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Format daty';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Wprowadź format daty obsługiwany przez funkcję PHP function date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Format czasu';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Wprowadź format czasu obsługiwany przez funkcję PHP function date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Format daty i czasu';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Wprowadź format daty i czasu obsługiwany przez funkcję PHP function date().';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Strefa czasowa';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Wybierz twoją strefę czasową.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Ścieżka relatywna do katalogu Contao';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Wprowadź ścieżkę relatywną do katalogu zawierającego pliki Contao (np. jeśli twój panel administracyjny Contao ma adres <em>www.twojadomena.com/twojastrona/contao</em> relatywną ścieżką będzie <em>/twojastrona</em>).';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Kodowania znaków dla Contao';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Wpisz rodzaj kodowania znaków. Rekomendowane jest używanie UTF-8, zapewnia to poprawne wyświetlanie znaków specjalnych np. diakrytycznych.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Dodatkowe sekcje układu strony';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Tutaj możesz wprowadzić dodatkowe sekcje układu strony, nazwy sekcji muszą być rozdzielone przecinkami. Możesz ich używać w module <em>Układ strony</em> jako dodatkowe sekcje przy <em>header</em>, <em>left</em>, <em>main</em>, <em>right</em> and <em>footer</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Wyłącz automatyczne zadania';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Wyłącz wykonywanie zadań automatycznie i wykonuj plik cron.php za pomocą prawdziwego crona (ten musisz włączyć ręcznie).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Minimalizuj kod źródłowy';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Minimalizuj kod źródłowy HTML zanim zostanie wysłany do przeglądarki (wymaga rozszerzenia PHP tidy).';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Kompresuj skrypty';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Tworzy skompresowaną wersję połączonych ze sobą plików CSS i JavaScript. Włączenie tej opcji wymaga dostosowania pliku .htaccess.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Ilość wyników na stronie';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Ilość wyników na stronie jest używana do ograniczenia wyników zapytań w admin panelu, nie dotyczy to wyszukiwarki.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Maksymalna ilość pozycji na stronie';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Ta opcja ustala maksymalną ilość wyświetlanych rekordów w panelu jeśli użytkownik wybierze opcję "Pokaż wszystkie rekordy".';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Nie zwijaj elementów zawartości';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Nie zwijaj elementów zawartości i innych zasobów podczas podglądu w panelu admina.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'Suffix URL';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'Suffix URL to rozszerzenie dodawane do adresu zasobu (URI) aby symulować statyczne dokumenty. Domyślnym suffixem URL jest <em>.html</em>. Pamiętaj, że nie używanie suffixu URL, może mieć negatywny wpływ na pozycję strony w wyszukiwarkach.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Tryb pamięci podręcznej';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Tu możesz wybrać tryb pamięci podręcznej.';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anonimizuj adresy IP';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anonimizuj każdy adres IP, który jest przechowywane w bazie danych, z wyjątkiem tych w tabeli <em>tl_session</em> (adres IP jest przypisany do sesji ze względów bezpieczeństwa).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonimizuj Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anonimizuj adresy IP wysyłane do Google Anayltics.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Przyjazne URL';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Włączenie tej opcji pozwala Contao na generowanie statycznych URL bez "index.php". Opcja wymaga wymaga "mod_rewrite", zmień nazwę pliku ".htaccess.default" na ".htaccess" i w razie potrzeby dostosuj RewriteBase.';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Dodaj język do URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Dodaj język jako pierwszy parametr URL (np. <em>http://domain.tld/en/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Nie przekierowuj pustych URLi';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'Dla pustego URLa wyświetl stronę, zamiast przekierowania do punktu startowego języka (niezalecane).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Używaj parametru auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Pomiń fragment <em>items/</em> lub <em>events/</em> w URL i automatycznie załaduj rekord bazując na parametrze <em>auto_item</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Wyłącz obsługę aliasów stron';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Jeśli wybierzesz tę opcję Contao będzie używać do generowania URLi numerów ID stron zamiast aliasów (np. <em>12.html</em> zamiast <em>home.html</em>).';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Dozwolone tagi HTML';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Wpisz listę dozwolonych tagów HTML. Wszystkie inne tagi zostaną usunięte z wprowadzanych danych.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Tryb diagnozowania';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Po włączeniu tej opcji na ekranie będą wyświetlane aktualne operacje wykonywane przez system (np. zapytania do bazy danych). Opcja ta jest zalecana wyłącznie podczas modyfikacji systemu!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Wyłącz sprawdzanie poprawności URL (referer check)';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Wybierz tę opcję aby wyłączyć w Contao sprawdzanie poprawności adresów URL podczas np. wysyłania formularzy. Pamiętaj, że wyłączenie tej opcji to poważne naruszenie bezpieczeństwa systemu! Typowymi problemami, związanymi z błędnym działaniem sprawdzania poprawności adresów URL, są ustawienia programów zabezpieczających lub innych narzędzi diagnostycznych.';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Czas oczekiwania na odblokowanie konta';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Wprowadź czas (w sekundach), po którym użytkownik ponownie będzie miał możliwość zalogowania się na swoje konto (domyślnie: 5 minut = 300 sekund). Ta funkcja utrudnia ataki metodą "brutal force".';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Wyświetl komunikaty błędów';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Wybranie tej opcji będzie wyświetlać komunikaty błędów bezpośrednio na ekranie. Opcja ta jest zalecana wyłącznie podczas modyfikacji systemu!';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Loguj błędy';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Zapisuj błędy to pliku log (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Działaj w trybie bezpiecznym';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Uruchom Contao w trybie bezpiecznym i ładuj tylko moduły źródłowe.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Wyłącz sprawdzanie IP';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Nie przypisuj adresu IP do sesji użytkownika. Zaznaczenie tej opcji to potencjalna luka w bezpieczeństwie systemu!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Poprawne typy pobieranych plików';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Wprowadź oddzielone przecinkami rozszerzenia plików, które chcesz udostępniać do pobierania w swoim serwisie. Z przyczyn bezpieczeństwa pobieranie plików ograniczone jest do katalogu "tl_files" i jego podkatalogów.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Poprawne typy plików graficznych';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Wprowadź oddzielone przecinkami rozszerzenia plików graficznych, które chcesz aby były obsługiwane. Nie wprowadzaj takich rodzajów plików, które nie sa obsługiwane przez Contao lub przez twoje własne skrypty.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Edytowalne typy plików';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Wprowadź oddzielone przecinkami rozszerzenia plików, które mogą być edytowane w edytorze zawartości.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Pliki typów szablonów';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Wprowadź oddzielone przecinkami wspierane rozszerzenia plików szablonów.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Maksymalna szerokość obrazka';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Jeśli szerokość obrazka lub filmiku będzie większa niż podana wartość, plik zostanie przeskalowany do podanej wartości automatycznie.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Jakość miniaturek';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Wprowadź jakość miniaturek w procentach (dotyczy tylko plików JPG).';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maksymalna długość obrazka GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Wprowadź maksymalną długość dla obrazka, którą biblioteka GD postara się ujarzmić.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maksymalna wysokość obrazka GD';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Wprowadź maksymalną wysokość dla obrazka, którą biblioteka GD postara się ujarzmić.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Katalog plików';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Wprowadź relatywną ścieżkę do katalogu z plikami (domyślnie: tl_files).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Poprawne typy wysyłanych plików';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Wprowadź oddzielone przecinkami rozszerzenia plików, które mogą być wysyłane na serwer. Z przyczyn bezpieczeństwa pobieranie plików ograniczone jest do katalogu "tl_files" i jego podkatalogów.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Jednoczesne wysyłanie plików';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Wprowadź maksymalną ilość plików jaka może być wysyłana jednocześnie na serwer.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maksymalna wielkość wysyłanego pliku';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Wprowadź maksymalną wielkość wysyłanego pliku w bajtach (2 MB = 2048 KB = 2048000 bajty).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maksymalna szerokość obrazka';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Wprowadź maksymalną szerokość wysyłanego obrazka w pikslach.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maksymalna wysokość obrazka';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Wprowadź maksymalną wysokość wysyłanego obrazka w pikslach.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Włącz silnik wyszukiwania';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Automatyczna indeksacja stron serwisu, ich wyniki znajdziemy podczas wyszukiwania.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indeksuj strony zabiezpieczone';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Używaj tej opcji z rozwagą i zawsze wykluczaj strony spersonalizowane lub prywatne z indeksowania!';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Użyj SMTP do wysyłania e-maili';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Domyślnie Contao używa funkcji PHP <em>mail()</em> do wysyłania e-maili. Zamiast tego możesz tutaj wybrać serwer SMTP do wysyłania e-maili.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'Serwer SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Wprowadź nazwę serwera SMTP (domyślnie jest to localhost).';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'Login SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Jeśli twój serwer SMTP wymaga autoryzacji, wprowadź tutaj login.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'Hasło SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Jeśli twój serwer SMTP wymaga autoryzacji, wprowadź tutaj hasło.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'Szyfrowanie SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Tu możesz wybrać metodę szyfrowania (SSL lub TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'Numer portu SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Wprowadź numer portu twojego serwera SMTP (domyślnie jest to 25 lub 465 dla połączeń SSL).';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Wyłącz moduły panelu admina';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Tutaj możesz wyłączyć niepotrzebne moduły panelu admina.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Czas przechowywania danych dla operacji "Cofnij"';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Wprowadź czas (w sekundach) przechowywania danych dla operacji "Cofnij" (domyślnie: 24 godziny = 86400 sekundy).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Czas przechowywania wersji';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Wprowadź czas (w sekundach) przechowywania wersji zmian (domyślnie: 90 dni = 7776000 sekund).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Czas przechowywania logów';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Wprowadź czas (w sekundach) przez jaki przechowywane będą logi systemowe (domyślnie: 14 dni = 1209600 sekund).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Żywotność sesji';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Wprowadź maksymalny czas trwania sesji, podaj wartość w sekundach (domyślnie: 60 minut = 3600 sekund). Jeśli w tym przedziale czasu użytkownik będzie nieaktywny, aktualna sesja zostanie przerwana a użytkownik wylogowany.';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Okres automatycznego logowania';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Tu możesz ustalić okres automatycznego logowania (90 dni = 7776000 sekund).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Domyślna strona użytkownika';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Domyślnie strona należy do tego samego użytkownika co strona nadrzędna. Jednakże, jeśli żaden użytkownik nie jest przypisany do strony, właścicielem zostaje użytkownik domyślny. Jeśli nie ma przydzielonego użytkownika i dodatkowo nie ma ustalonego domyślnego użytkownika, do strony nie zostaną zastosowane żadne ograniczenia dostępu!';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Domyślna strona grupy';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Domyślnie strona należy do tej samej grupy co strona nadrzędna. Jednakże, jeśli żadna grupa nie jest przydzielona, właścicielem strony zostanie grupa domyślna. Jeśli nie ma przydzielonej grupy i dodatkowo nie ma ustalonej domyślnej grupy, do strony nie zostaną zastosowane żadne ograniczenia dostępu!';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Uprawnienia domyślnej strony';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Domyślnie, strona posiada takie same uprawnienia jak strona nadrzędna. Jednakże jeśli żadne uprawnienia nie zostały zdefiniowane, użyte zostaną uprawnienia domyślne.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'URL automatycznej aktualizacji';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Tu możesz wprowadzić URL automatycznej aktualizacji.';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Tytuł strony';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Data i czas';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Konfiguracja globalna';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Konfiguracja panelu admina';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Konfiguracja witryny';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Ustawienia prywatności';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Ustawienia bezpieczeństwa';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Pliki i obrazki';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Ustawienia wysyłania';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Ustawienia wyszukiwarki';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Konfiguracja SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Nieaktywne rozszerzenia';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Wartości czasowe';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Domyślne prawa dostępu';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Automatyczna aktualizacja';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Źródła statyczne';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Edytuj konfigurację';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Użyj pamięci serwera i przeglądarki';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Użyj tylko pamięci serwera';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Użyj tylko pamięci przeglądarki';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Wyłącz pamięć podręczną';
