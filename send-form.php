<?

if (!empty($_POST['name']) && !empty($_POST['pochta']) && empty($_POST['email'])) {


    $fields = [
        'FIELDS' => [
            'TITLE' => 'Письмо с сайта biomedglobal.net',
            'NAME' => (string) $_POST['name'],
            'EMAIL' => [
                [
                    'VALUE' => (string) $_POST['pochta'],
                    'TYPE' => 'WORK',
                ],
            ],
            'OPENED' => 'Y',
            'ASSIGNED_BY_ID' => 7713,
            'TYPE_ID' => '1',
            'SOURCE_ID' => 'WEB',
            'UF_CRM_1512648624' => [  //сообщение
                (string) $_POST['text'],
            ],
            'UF_CRM_1533039419' => '1892', //типизация - потребители
            'UF_CRM_1512648523' => '1867', //сайт - биомед
            'UF_CRM_1512658537' => 'Письмо с сайта biomedglobal.net', //сайт - биомед
        ],
    ];

    $queryUrl = 'https://bitrix.splat.ru/rest/7639/q7uu1r5u4d4u566f/crm.lead.add/';
    $queryData = http_build_query($fields);
    $curl = curl_init();
    curl_setopt_array(
        $curl,
        [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
        ]
    );
    $result = curl_exec($curl);
    curl_close($curl);
    echo json_encode([
        'result' => true
    ]);
}