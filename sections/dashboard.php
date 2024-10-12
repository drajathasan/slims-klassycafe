<?php
extendLayout();

_include('components.loader');
_include('components.header');
_include('components.banner');
_include('components.about');
_include('components.newbook');
_include('components.topmember');
_include('components.contact');
_include('components.news');
_include('components.footer');
_include('components.script');

section('title', $title);

section('content', function() {
    ob_start();
    echo _yield('loader');
    echo _yield('header');
    echo _yield('banner');
    echo _yield('about');
    echo _yield('newbook');
    echo _yield('topmenu');
    echo _yield('contact');
    echo _yield('news');
    echo _yield('footer');
    echo _yield('script');
    return ob_get_clean();
});
