Changelog
=========

1.5.1
-----------------
  * Update Window component
  
1.5.0
-----------------
  * Update events
  * Update EventManager
  * Update ajax
  
1.4.1
-----------------
  * Update
   
1.4.0
-----------------
  * removed old php
  * rename sx.config to sx.Config
  * sx.cookie expires 1 year by default
  * Component cookie is @deprecated

1.3.0.1
-----------------
  * Fixed bug
  
1.3.0
-----------------
  * Removed depricated filters
  * Compatibility with jquery 3.0
  
1.2.5
-----------------
  * Add mb_pathinfo
  
1.2.4
-----------------
  * Window open update
  
1.2.3.1
-----------------
  * fixed
  
1.2.3
-----------------
  * "bower-asset/underscore": "^1.8"

1.2.2
-----------------
  * Add skeeks\sx\helpers\ResponseHelper
  * The declaration deprecated

1.2.1
-----------------
  * Remove skeeks cms dependency
  * BaseAsset updated
  * Updated seo filter

1.2
-----------------
  * Is deprecated Widget.js
  * Inactive Debug.js
  * Removed sx.debug();

1.1.12
-----------------
  * В компонент Window добавлен новый метод close()

1.1.11
-----------------
  * Удалены некоторые старые классы php

1.1.10
-----------------
  * Удалены некоторые старые классы php

1.1.9
-----------------
  * Удалены некоторые старые классы php

1.1.8
-----------------
  * Переезд на github

1.1.7
-----------------
  * Исправлено удаление и чистка диррикторий

1.1.6
-----------------
  * Исправлен баг родительского окна Window.js

1.1.5
-----------------
  * sx.core.min.js
  * Исправление работоспособности в IE 8 
  
1.1.4
-----------------
  * Новый хелпер sx.helpers.Request - удобный парсинг, гет параметров страницы.
  
1.1.3
-----------------
  * Изменен компонент js Window, по умолчанию текущее окно не закрывается если было создано родительским, и родительское закрыли. Но опционально поддерживает эту возможнсоть.

1.1.2
-----------------
  * В компоненте js добавлена проверка, если window load уже выполнен, произойдет вызов _onWindowReady()

1.1.1
-----------------
  * Добавлены новые методы в String объект

1.0.10
-----------------
  * Изменилась логика работы sx.classes.modal (убраны autostart параметры)
  * добавлены sx.promt()
  * добавлены sx.dialog()
  * добавлены sx.classes.modal.Dialog
  * добавлены sx.classes.modal.Promt
  * Переработа modal

1.0.9
-----------------
  * Доработка объекта ajax
  * Доработка String

1.0.8
-----------------
  * Исправлен баг, двойное событие windowReady в компоненте

1.0.7
-----------------
  * Изменения в custom сборке
  * AjaxHandlerStandartRespose - новый js компонент
