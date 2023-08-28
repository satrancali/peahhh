<?php

namespace App\Models;

class UserModel {
    public static function getAll() {
        // Burada gerçek veritabanı sorgularınızı yaparak kullanıcı verilerini alabilirsiniz.
        // Örnek olarak döşeleyici veri döndürüyorum.
        return [
            ['name' => 'User 1'],
            ['name' => 'User 2'],
            ['name' => 'User 3']
        ];
    }
}
