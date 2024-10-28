Sitenin açılması hakkında:
1-Dosyanın içinde laravel.sql uzantılı dosyanın phpMyAdmin ' e içeri aktarılması(ilk olarak laravel adında bir veritabanı oluşturduktan sonra üst tarafta bulunan içeri aktar butonuna basarak ilgili dosyayı içeri aktarabilirsiniz)
2-env.txt dosyasını maalesef bazen göstermediği için ihtiyaç halinde env.txt adında dosya bulunmaktadır proje içine .env dosyası oluşturup içine env.txt dosyasına içindeki kopyalayarak yapıştırın
3- elevetor_system_database_laravel dosyasının terminaline gelerek
 composer install
 rm -rf public/storage
 php artisan storage:link
 php artisan migrate komutunu yazınız
4- projeyi başlatmak için ise 
 Php artisan serve komutunu terminale yazınız

Ek olarak:
/admin  urlye koyarsanız 
Kullanıcı adı ve şifre : admin
Şeklindedir. 