### laravel chat app for demo purposes
aplikasi demo realtime chat menggunakan metode livewire polling.

## requirement
- laravel v10
- php 8.1
- laravel breeze using blade (for UI and auth scaffolding)
- livewire
- bootstrap 5

## Memulai
- cp .env.example .env
- `php artisan migrate::fresh --seed`
- `php artisan serve`

buka http://localhost:8000/login ambil salah satu email pada database, password: `password`

#### kekurangan dan kelebihan polling method
1. ada tidak adanya perubahan data akan selalu ada request ke backend untuk cek message terbaru, setiap interval tertentu,
sehingga akan sangat membebani server ketika jumlah user yang pakai secara bersamaan banyak.
2. ada yg menyarankan menggunakan light polling tp baru sebatas concept, blm ada proof of concept
3. metode polling ini mudah untuk di implementasi dan tidak perlu setup/konfigurasi websocket server

#### suggestion light polling
- To avoid the Polling/Refresh issue, you could have an isolated hidden div that is polling for only a hash of the backend
  data, and if the hash changes, execute the message refresh through emit, etc. This way, when idle, the hash is the only
  data exchanged rather than refreshing unchanged data


#### kekurangan dan kelebihan websocket method
1. request ke backend hanya akan terjadi jika memang ada perubahan data
2. kekurangannya implementasi akan sedikit lebih kompleks dibanding pendekatan polling
3. perlu ada nya websocket server
