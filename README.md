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
