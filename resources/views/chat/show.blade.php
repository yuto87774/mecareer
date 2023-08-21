<!DOCTYPE html>
<html lang="ja">
@include('html.header', ['cssPath' => '/css/showChat-style.css', 'pageTitle' => 'chatroom'])

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Chat with {{ $user->name }}</h1>
                    </div>

                    <div class="card-body" id="chat-messages">
                        @foreach ($messages as $message)
                            <div class="message">
                                @if ($message->sender_id === auth()->user()->user_id)

                                    <div class="own-message">
                                        <strong>{{ $message->sender->name ?? 'Unknown Sender'}}:</strong> {{ $message->content }}
                                        <a href="{{ route('chat.edit', ['user' => $user, 'message' => $message]) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('chat.delete', ['user' => $user, 'message' => $message]) }}" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="other-message">
                                        <strong>{{ $message->sender->name ?? 'Unknown Sender'}}:</strong> {{ $message->content }}
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer">
                        <form method="POST" action="{{ route('chat.send', $user) }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="content" class="form-control" placeholder="Type your message" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('html.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.Echo.private(`chat.${auth()->user()->user_id}.${user.user_id}`)
            .listen('MessageSent', (event) => {
                let message = event.message;

                let messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                messageDiv.innerHTML = `<strong>${message.sender.name}:</strong> ${message.content}`;

                document.getElementById('chat-messages').appendChild(messageDiv);
            });
    </script>
</body>

</html>
