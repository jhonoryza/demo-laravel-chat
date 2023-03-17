### laravel chat app for demo purposes

#### stack
- laravel breeze using blade (for UI and auth scaffolding)
- livewire
- bootstrap 5

#### implementation
1. polling or light polling livewire
2. laravel echo (socket.io)
3. laravel websocket

ada 3 contoh implementasi, masing2 implementasi ada pada branch yg berbeda

#### suggestion light polling
- To avoid the Polling/Refresh issue, you could have an isolated hidden div that is polling for only a hash of the backend 
data, and if the hash changes, execute the message refresh through emit, etc. This way, when idle, the hash is the only 
data exchanged rather than refreshing unchanged data
