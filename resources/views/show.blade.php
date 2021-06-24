@extends('layouts.app')

@section('content')
    <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
        <x-main>
            <div
                class="h-full text-right faseyha text-gray-700 dark:text-white text-md prettyprint linenums selectable" data-line-numbers="true" dir="rtl"
            >{!!$paste->content !!}
        </div>
        </x-main>

        <x-nav>
            <x-nav-item label="New" :link="route('home')" icon="heroicon-o-document-add" />
            <x-nav-item
                label="Copy"
                type="button"
                icon="heroicon-o-clipboard"
                class="copy-btn"
                data-clipboard-text="{{ $paste->content }}"
            />
            <x-nav-item label="Fork" :link="route('edit', $paste->hash)" icon="heroicon-o-document-duplicate" />
            <x-nav-item label="Raw" :link="route('raw', $paste->hash)" icon="heroicon-o-external-link" blank />
        </x-nav>
    </div>
@stop
