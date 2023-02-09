Nama: Angelique Aurielle Alpaullivarez
NIM: 2440122564

-- Cara Instalasi Project

Cara 1: 
1. Download dan Extract project yang masih di zip
2. Buka Command prompt
3. Ketik "code ." pada terminal
4. Buka terminal pada visual studio code
5. ketik composer update
6. Nyalakan xampp
7. Buat database dengan nama "grocerystore"
8. Pada file .env, ubah database_name sesuai dengan yang sudah dibuat
9. Buka terminal pada visual studio code 
10. Ketikan php artisan migrate:fresh --seed 
11. ketik php artisan serve

Apabile beberapa asset seperti gambar tidak muncul, maka lakukan langkah-langkah berikut:
1. cd public
2. rm storage
3. cd ..
4. php artisan storage:link
