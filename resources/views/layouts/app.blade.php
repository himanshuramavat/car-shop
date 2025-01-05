@props(['title' => '', 'footerLinks' => ''])

<x-base-layout :$title>
    <x-layouts.header />


    {{ $slot }}

    <footer>
        <a href="http://">Link 1</a>
        <a href="http://">Link 2</a>
        {{ $footerLinks }}
    </footer>

</x-base-layout>
