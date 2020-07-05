<?php return [
    'plugin' => [
        'name' => 'Яндекс Касса для MALL',
        'description' => 'Добавляет платежный провайдер Яндекс.Касса'
    ],
    'settings' => [
        'yandex_checkout' => 'Яндекс.Касса',
        'shop_id' => 'shopId',
        'shop_id_label' => 'ID магазина',
        'secret_key' => 'Секретный ключ',
        'secret_key_label' => 'Секретный ключ для API',
        'url_for_notifications' => 'URL для уведомлений',
        'url_for_notifications_label' => 'Адрес в вашей системе, на который будут приходить уведомления о событиях. Пример: /yandex-checkout',
        'orders_page_url' => 'URL страницы заказов пользователя',
        'orders_page_url_label' => 'Пример: http://site.tld/account/orders',
        'set_payed_virtual_order_as_complete' => 'Изменять статус оплаченных виртуальных заказов на "Выполнен"',
    ],
    'messages' => [
        'order_number' => 'Заказ №',
    ]
];