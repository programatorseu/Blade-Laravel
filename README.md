# Blade component

## 1. Layout component

views/components/layout.blade.php
views/components/section.blade.php

```php
<section class="bg-gray-300 p-4 mb-6">
    <div class="container">
        {{$slot}}
    </div>
</section>
```

to use it :

```php
<x-layout>
    <x-section> Hello There</x-section>
    <x-section> Hello 2</x-section>
</x-layout>
```

## 2. Flash component

```php
<x-layout>
    <x-flash type="error">
        You are now logged out
    </x-flash>

    <x-flash class="mt-10">
        You are now logged out
    </x-flash>
</x-layout>
```

-   use attributes merge feature to add styles

```php
@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400 border-green-500',
        'error' => 'bg-red-400 border-red-500',
        'warning' => 'bg-orange-400 border-orange-500'
    ]


])

<section {{$attributes->merge(['class' => "{$colors[$type]} border-b p-4"])}} >
    <div class="flex justify-between">
        {{$slot}}
        <button>&times;</button>
    </div>
</section>
```

## 3. Form component

```php
@props([
    'method' => 'POST',
    'action' => ''
])

<form
    method="{{$method === "GET" ?  'GET' : 'POST'}}"
    action="{{$action}}" {{$attributes}}>

    @csrf

    @if(! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif
    {{$slot}}
```

edit file :

```php
<x-layout>
    <x-section>
        <x-form
            method="GET"
            action="/comments/"
        >
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="body"
                >
                    Body
                </label>

                <textarea class="border border-gray-400 p-2 w-full"
                          name="body"
                          id="body"
                          required
                >Text to edit</textarea>
        </x-form>
    </x-section>
</x-layout>

```

## 4. Delete button component :

'

```php
<x-form method="{{ $method }}" action="{{ $action }}">
    <div>
        <button type="submit" {{ $attributes }}>
            {{ $slot }}
        </button>
    </div>
</x-form>
```
