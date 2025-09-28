<?php
/**
 * Функции и определения темы My Basic Theme
 */

if (!defined('ABSPATH')) {
    exit; // Защита от прямого доступа
}

// Базовая настройка темы
function mybasictheme_setup() {
    // Поддержка переводов
    load_theme_textdomain('mybasictheme', get_template_directory() . '/languages');

    // Добавляем поддержку тега <title>
    add_theme_support('title-tag');

    // Включаем поддержку миниатюр записей
    add_theme_support('post-thumbnails');

    // Регистрируем меню
    register_nav_menus(array(
        'primary' => __('Главное меню', 'mybasictheme'),
    ));

    // Включаем поддержку HTML5 разметки для форм и поиска
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mybasictheme_setup');

// Подключение стилей и скриптов
function mybasictheme_scripts() {
    // Основной файл стилей
    wp_enqueue_style('mybasictheme-style', get_stylesheet_uri());

    // Подключение основного script.js (если он будет создан)
    // wp_enqueue_script('mybasictheme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mybasictheme_scripts');

// Регистрация области виджетов (сайдбара)
function mybasictheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Боковая панель', 'mybasictheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Добавьте сюда виджеты.', 'mybasictheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mybasictheme_widgets_init');






/**
 * Webdmitriev options.
 */
require get_template_directory() . '/webdmitriev/webdmitriev.php';