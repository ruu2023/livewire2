### view の作成

-   livewire layouts の作成

```bash
php artisan livewire:layout
```

-   blade の作成

```bash
php artisan make:view greeting
```

-   view layouts の基本文

```php
<x-layouts.app>
    <x-slot:title>
        Custom Title
    </x-slot>

    <livewire:greet-message />
</x-layouts.app>
```

-   routing の基本

```php
Route::get('/greeting', function()
{
    return view('greeting');
})->name('greetinge');
```

### livewire の基本

-   コンポーネントの作成

```bash
php artisan make:livewire counter
```

-   livewiere の view
-   resources/views/livewire/greet-message.blade.php

```php
<div>
    <p>{{ $message }}</p>
    <button wire:click="greet">挨拶しますん</button>
</div>
```

-   コンポーネントの php
-   app/Livewire/GreetMessage.php

```php
namespace App\Livewire;

use Livewire\Component;

class GreetMessage extends Component
{
    public $message;
    public $pushCnt;

    public function __construct()
    {
        $this->message = "Hello World";
        $this->pushCnt = 0;
    }

    public function greet()
    {
        $this->pushCnt++;
        $this->message = "Hello, Livewire (" . $this->pushCnt . ")";
    }

    public function render()
    {
        return view('livewire.greet-message');
    }
}

```

### エラー

-   livewire の view に何も書かないと起こるエラー
-   /views/livewire/greet-message.blade.php には、全体を囲む一つの<div>が最低限必要です。

```php
Livewire encountered a missing root tag when trying to render a component. When rendering a Blade view, make sure it contains a root HTML tag.
```
