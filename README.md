# Datenbank
- Die Datenbank migrationsdateien befinden sich in `database/migrations`
- Diese sind zuständig, die Datenbank zu erstellen und werden aufsteigend nach dessen Dateinamen ausgeführt
- Man kann die Datenbank mit dem Befehl `php artisan migrate` migrieren
- Mit dem Befehl `php artisan migrate:status` wird ausgegeben, welche Migrationsdateien ausgeführt wurden

----

# Routing
- Die Ruten befinden sich in `routes/web.php`
- Die statische Methode get des Objekts `Route` nimmt als ersten Parameter die get-request entgegen, wobei die geschwungenen Klammern als Platzhalter stehen für die Eingabe des Benutzers oder eines Verweises. Die Bezeichnung des Parameters ist beliebig, jedoch muss diese mit der Variable der Instanz des Objekts übereinstimmen, welches in die Funktion des zweiten Parameters übergeben wird.
	- Die Bezeichnung nach dem Doppelpunkt im ersten Parameter, in den Klammern steht für den Parameter des Modells/Datenbankspalte, somit kann auch statt des Primärschlüssels auch ein Slug oder ein Benutzernamen verwendet werden.
	- Die Funktion gibt anschließend die Methode view zurück, in welcher der erste Parameter für das [Blade Template](/https://laravel.com/docs/9.x/blade "Blade templates") steht und als zweiter Parameter wird ein Array übergeben, in welchem der Key für die Variable im [Blade Template](/https://laravel.com/docs/9.x/blade "Blade templates") steht mit dessen zugewiesenen Wert.

----

# Ansicht
- ## Blade Templates
	- Die Ansicht wird mit [Blade templates](/https://laravel.com/docs/9.x/blade "Blade templates") generiert
	- Die Dateien zur Ansicht befinden sich in `resources/views`
	- Die jeweiligen Ansichten im `resources/views` Ordner erben die Ansicht von den Dateien, welche sich im `resources/views/layouts` befinden. Diese erben wiederrum von dem Masterlayout, welches sich im Ordner `resources/layouts/masterlayout` befindet
- ## Styling
	- Das styling der Website erflogt mit [Bootstrap](https://getbootstrap.com/ "Bootstrap")
	- Für die Icons wird [Fontawesome](https://github.com/FortAwesome/Font-Awesome "Fontawesome") verwendet
	- Die scss Dateien von [Bootstrap](https://getbootstrap.com/ "Bootstrap") und [Fontawesome](https://github.com/FortAwesome/Font-Awesome "Fontawesome") befinden sich im `node_modules/@fortawesome` und `node_modules/bootstrap` Ordner. Diese werden über die Datei `resources/sass/app.scss` geladen und werden mit dem Befehl `npm run dev` automatisch bei Veränderungen kompiliert. Im Falle von einem build mit dem Befehl `npm run build` in den Ordner `public/build/assets` kompiliert.
    - ### Icons
        - Die Icons werden von [Fontawesome](https://github.com/FortAwesome/Font-Awesome "Fontawesome") verwendet, wobei man nach der Installation von [Fontawesome](https://github.com/FortAwesome/Font-Awesome "Fontawesome") den Ordner `node_modules/@fortawesome/fontawesome-free/webfonts` in den Ordner `storage/app/public/` kopieren muss, dass die Icons auch für den Benutzer zugänglich sind.

----

- ## Bilder
    - Bilder befinden sich im Ordner `storage/app/public`
    - Die Bilder der Provider in `storage/app/public/providers` wird über das Webinterface (Admin) gemanaged, desshalb ist es nicht nötig diesen Ordner zu bearbeiten.
    - Im Ordner `storage/app/public/img` befinden sich Bilder zur Gestaltung der Website, wie bsp. im Ordner `storage/app/public/img/bg` befinden sich die Hintergrundbilder zu den jeweiligen Sections auf den Websiten.

----

# Sprache
- ## statische Übersetzung
    - Für die statische Übersetzung werden vom Ordner `lang/` die Sprachen geladen. Der Dateityp kann entweder `json` oder `php` sein. In diesem Projekt wird `json` gewählt. Die Sprache wird in `config/app.php` mit dem Schlüssel 'locale' und dem Wert der Sprache gesetzt bsp. 'de' oder 'it'. In den json Dokumenten, welche den Kürzel der Sprache enthalten müssen, gibt es einen Schlüssel und einen Wert. Auf der Website kann man den Wert anzeigen, wenn man dies so ausgibt: `{{ __('Schluessel') }}`. Der Schlüssel muss in beiden Sprachen der Selbe sein.
- ## dynamische Übersetzung
    - Für die dynamische Übersetzung gibt es in der Datenbank jeweils eine neue Spalte für die jeweilige Sprache. Das Suffix der Spalte ist `_de` oder `_it`. Beispielsweise wenn es Ortschaften gibt, welche in beiden Sprachen anders geschrieben sind dann sehen die Spalten so aus: `ortschaft_de` und `ortschaft_it`. In den Blade Templates wird das Prefix angegeben und über eine Funktion, welche die aktuelle Sprache ausließt, das Suffix angehängt.
