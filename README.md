Лабораторная работа №3: Разработка простой темы WordPress
Инструкции по запуску проекта
Установи локальный WordPress (XAMPP, OpenServer, LocalWP)

Скопируй папку usm-theme в wp-content/themes/

Активируй тему через Appearance → Themes

Включи отладку в wp-config.php:

php
define('WP_DEBUG', true);
Адрес сайта: http://localhost/wp_lab2/

Описание лабораторной работы
Цель: Научиться создавать собственную тему WordPress, разобраться в её минимальной структуре и принципах работы шаблонов.

Выполнено по шагам:

Шаг 1: Подготовка среды (XAMPP, WP_DEBUG)

Шаг 2: Обязательные файлы style.css, index.php

Шаг 3: Общие части header.php, footer.php, подключение через get_header(), get_footer()

Шаг 4: functions.php с wp_enqueue_style()

Шаг 5: Дополнительные шаблоны (single.php, page.php, sidebar.php, comments.php, archive.php)

Шаг 6: Стилизация (розовые пастельные тона, flexbox-верстка)

Шаг 7: Скриншот темы screenshot.png (1200x900px)

Шаг 8: Активация в админке

Краткая документация к теме
Структура файлов
text
usm-theme/
├── style.css           ← метаданные + стили (розовые тона)
├── index.php           ← главная страница (5 последних записей)
├── header.php          ← шапка сайта
├── footer.php          ← подвал сайта  
├── functions.php       ← подключение стилей через wp_enqueue_style()
├── single.php          ← отдельная запись + комментарии
├── page.php            ← статическая страница
├── sidebar.php         ← боковая панель (слева)
├── comments.php        ← комментарии
├── archive.php         ← архивы (рубрики, даты)
└── screenshot.png      ← превью темы
Особенности реализации
Двухколоночная верстка: display: flex с левым sidebar

Цикл WordPress: выводит ровно 5 записей на главной

Розовая цветовая схема: пастельные тона, мягкие тени, скругления

Адаптивность: на мобильных sidebar уходит вниз

Все шаблоны: выполнена полная иерархия template hierarchy

Примеры использования темы
1. Главная страница
text
http://localhost/wp_lab2/
Выводит 5 последних записей с заголовками, датами и анонсами.

2. Отдельная запись
text
http://localhost/wp_lab2/?p=1
Полный текст записи + форма комментариев.

3. Архив по рубрике
text
http://localhost/wp_lab2/category/имя-рубрики/
Список записей рубрики с описанием архива.

4. Админка
text
http://localhost/wp_lab2/wp-admin
Тема видна в Appearance → Themes с превью screenshot.png.

Ответы на контрольные вопросы
1. Какие два файла являются обязательными для любой темы WordPress?
style.css (метаданные темы) и index.php (основной шаблон/fallback).

2. Как подключаются общие части шаблонов (header, footer, sidebar)?
php
get_header();     // ← подключает header.php
get_footer();     // ← подключает footer.php  
get_sidebar();    // ← подключает sidebar.php
3. Чем отличаются index.php, single.php и page.php?
index.php — fallback для всех случаев + главная страница

single.php — отдельная запись (пост)

page.php — статическая страница

Иерархия: если нужного файла нет, WordPress использует index.php.

4. Зачем нужен файл functions.php в теме?
Автозагружается WordPress после активации темы. Служит для:

Подключения стилей/скриптов: wp_enqueue_style()

Регистрации меню, виджетов, поддержки фич

Добавления кастомных функций темы

Список использованных источников
WordPress Theme Handbook — структура темы, обязательные файлы

Template Hierarchy — иерархия шаблонов WordPress

Theme Development — functions.php, wp_enqueue_style()

XAMPP Documentation — локальная установка WordPress

Дополнительные важные аспекты
Адаптивная верстка: flexbox, медиа-запросы для мобильных

Цветовая схема: пастельные розовые тона, мягкие тени

Безопасность: esc_url(), body_class(), language_attributes()

Отладка: WP_DEBUG = true включена

Производительность: стили подключаются через wp_enqueue_style()
