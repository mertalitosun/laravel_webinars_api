# Kurulum

1. Zip dosyasını çıkartınız.
2. Eğer kurulu değilse PHP ve Composer kurulumunu gerçekleştiriniz.
3. .env doyasındaki veritabanı bilgilerini kendi bilgilerinizle güncelleyin.
4. Tabloları oluşturun 
    ```bash
        php artisan migrate
    ```
5. Örnek verileri ekleyiniz.

    ```bash
        php artisan db:seed
    ```
6.  Laravel sunucusunu başlatın

    ```bash
    php artisan serve
    ```

## Postman

- Postman klasörü içinde postman denemesi mevcut.

- Tüm Webinarları listeler
    ```bash
    http://localhost:8000/webinars 
    ```
- Eğer body ile status bilgisi gönderirseniz 1 veya 0 olarak verileri listeler

    ```bash
    {
        status: 1
    }
    ```
    veya

    ```bash
    {
        status: 0
    }
    ```