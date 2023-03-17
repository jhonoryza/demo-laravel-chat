### laravel chat app for demo purposes

#### requirement
- laravel v10
- php 8.1
- laravel breeze using blade (for UI and auth scaffolding)
- livewire
- bootstrap 5

#### ada 3 cara pendekatan implementasi:
1. polling or light polling livewire
2. laravel echo (socket.io)
3. laravel websocket

ada 3 contoh implementasi, masing2 implementasi ada pada branch yg berbeda

#### suggestion light polling
- To avoid the Polling/Refresh issue, you could have an isolated hidden div that is polling for only a hash of the backend 
data, and if the hash changes, execute the message refresh through emit, etc. This way, when idle, the hash is the only 
data exchanged rather than refreshing unchanged data

#### kekurangan dan kelebihan polling method
1. ada tidak adanya perubahan data akan selalu ada request ke backend untuk cek message terbaru, setiap interval tertentu,
untuk mensiasati nya bisa menggunakan light polling
2. kelebihannya mudah untuk di implementasi dan tidak perlu setup service socket

#### kekurangan dan kelebihan socket method
1. request ke backend hanya akan terjadi jika memang ada perubahan data
2. kekurangan agak kompleks untuk di implementasi
3. perlu ada nya service socket
