@extends('layouts.app')

@section('content')
    <form action="{{ route('home') }}" method="POST">
        @csrf

        <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
            <x-nav>
                <x-nav-item label="Save" type="submit" icon="heroicon-o-save" />
                <x-nav-item label="Reset" type="reset" icon="heroicon-o-ban" />
            </x-nav>
            
            <x-main>
                @include('_editor')
            </x-main>

           
        </div>
    </form>
@stop
