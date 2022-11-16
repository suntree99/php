# PHP

## Instalasi Apache di Windows
* Kunjungi https://www.apachelounge.com/download/
* Download zip yang sesuai dengan sistem operasi
* Extract dan simpan dalam folder tertentu (misal `C:\Apache`)
* Buka file `httpd.conf` pada `C:\Apache\Apache24\conf`
* Pada baris 37 sesuaikan lokasi Apache `Define SRVROOT "c:/Apache/Apache24"`
* Pada baris 162 hilangkan komentar (#) sehingga bisa menggunakan module tersebut 
* Pada baris 227 hilangkan komentar (#) dan ganti menjadi `ServerName localhost` (nama server)
* Pada baris 235 ganti AllowOverride none menjadi `AllowOverride all`
* Pada baris 272 ganti AllowOverride None menjadi `AllowOverride all`
* Save file
* Buka CMD (run as administrator) masuk ke `c:\Apache\Apache24\bin`
* Jalankan perintah `httpd.exe -k install`
* Buka Windows -> Services -> Apache2.4 -> Start
* Untuk membukannya kunjungi `http://localhost` jika berhasil akan menampilkan `It Works!`

## Instalasi PHP 8 di Windows
* Kunjungi https://www.php.net/ -> Download -> Stable PHP 8 -> Windows downloads
* Download ZIP VS16 x64 Thread Safe dan extract ke 
* Extract dan simpan dalam folder tertentu (misal `C:\Php\Php8`)
* Set Environment Variable melalui CMD dengan perintah `setx path "%PATH% C:\Php\Php8" /M`
* Edit kembali file `httpd.conf` pada `C:\Apache\Apache24\conf
* Pada baris 285 tambahkan `index.php` sehingga menjadi `DirectoryIndex index.html index.php`
* Pada baris terakhir tambahkan
    ```cmd
    PHPIniDir "C:/Php/Php8"
    AddHandler Application/x-httpd-php .php
    AddType Application/x-httpd-php .php
    LoadModule php_module "C:/Php/Php8/php8Apache2_4.dll"
    ```
* Save file
* Pada `C:\Php\Php8` copy dan Paste (untuk backup) file php.ini-developmentdan ubah menjadi php.ini
* Buka file php.ini 
* Pada baris 768 hilangkan komentar (;) agar aktif dan arahkan ke ext Php8 `extension_dir = "C:\Php\Php8\ext"`
* Pada baris 921 hilangkan komentar (;) agar `extension=curl` aktif
* Pada baris 924 hilangkan komentar (;) agar `extension=fileinfo` aktif (tambahan)
* Pada baris 925 hilangkan komentar (;) agar `extension=gd` aktif (tambahan)
* Pada baris 931 hilangkan komentar (;) agar `extension=mbstring` aktif
* Pada baris 933 hilangkan komentar (;) agar `extension=mysqli` aktif
* Pada baris 937 hilangkan komentar (;) agar `extension=openssl` aktif
* Pada baris 939 hilangkan komentar (;) agar `extension=pdo_mysql` aktif (tambahan)
* Pada baris 971 hilangkan komentar (;) agar aktif dan ubah menjadi `date.timezone = 'Asia/Jakarta`
* Save file
* Buat file `info.php` pada `C:\Apache\Apache24\htdocs` dan ini dengan code php
    ```php
    <?php
    info.php
    ?>
    ```
* Start/restart Apache dan kunjungi `http://localhost/info.php` 

##
##

# Heading 1 / Judul Utama (gunakan #)

## Heading 2 / Sub Judul (gunakan ##)

Text biasa (ditulis biasa tanpa format apapun)

[Hyperlink](https://www.google.com) (nama hyperlink dibungkus kurung siku, urlnya dibungkus tanda kurung biasa)

```bash
git add .
git commit -m "baris code menggunakan backtick 3x di awal(sertakan bahasanya) dan akhir code"
git push
```

Untuk `menyoroti` bungkus text dengan backtick 1x

# Template

## Sub Judul 
```<bahasa>
git add .
git commit -m 'Update README.md'
git push

```

```cmd

```

Update README.md