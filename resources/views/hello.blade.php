<h1>Hello {{ $name . " " . $age}} @foreach ($books as $item)
    {{ $item }}
@endforeach</h1>