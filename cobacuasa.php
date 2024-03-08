<?php
// Pengaturan untuk koneksi ke API OpenWeatherMap
$apiUrl = 'http://api.openweathermap.org/data/2.5/weather';
$api_key = "93cddb2f189cf9e314ea67778cf1fe2b";

// Kota yang ingin Anda dapatkan cuacanya
$city = 'Padang';

// URL lengkap untuk permintaan cuaca
$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";

// Melakukan permintaan ke API dan mendapatkan respons JSON
$response = file_get_contents($url);

// Mengonversi respons JSON menjadi array asosiatif
$weatherData = json_decode($response, true);

// Menampilkan data cuaca
if ($weatherData && isset($weatherData['main'], $weatherData['weather'])) {
    $temperature = $weatherData['main']['temp'];
    $weatherDescription = $weatherData['weather'][0]['description'];

    echo "Cuaca di {$city}:<br>";
    echo "Temperatur: " . round($temperature - 273.15, 1) . " °C<br>"; // Konversi ke Celcius
    echo "Deskripsi cuaca: {$weatherDescription}";
} else {
    echo "Tidak dapat mengambil data cuaca untuk {$city}.";
}
