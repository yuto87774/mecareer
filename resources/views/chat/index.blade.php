<!-- resources/views/chat/index.blade.php -->
<h1>Users</h1>

<ul>
    @foreach ($users as $user)
        <li><a href="{{ route('chat.show', $user) }}">{{ $user->name }}</a></li>
    @endforeach
</ul>
