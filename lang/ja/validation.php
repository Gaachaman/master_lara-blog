<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行には、バリデータクラスによって使用されるデフォルトの
    | エラーメッセージが含まれています。これらのルールの中には複数の
    | バージョンがあるものもあります。これらのメッセージを自由に
    | 調整してご利用ください。
    |
    */

    'accepted' => ':attribute を承認する必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute を承認する必要があります。',
    'active_url' => ':attribute は有効なURLでなければなりません。',
    'after' => ':attribute は :date 以降の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date 以降または同じ日付でなければなりません。',
    'alpha' => ':attribute は文字のみを含む必要があります。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attribute は文字と数字のみを含む必要があります。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute はシングルバイトの英数字および記号のみを含む必要があります。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date より前または同じ日付でなければなりません。',
    'between' => [
        'array' => ':attribute は :min から :max の項目数でなければなりません。',
        'file' => ':attribute は :min から :max キロバイトの間でなければなりません。',
        'numeric' => ':attribute は :min から :max の間でなければなりません。',
        'string' => ':attribute は :min から :max 文字の間でなければなりません。',
    ],
    'boolean' => ':attribute フィールドは真または偽でなければなりません。',
    'can' => ':attribute に無効な値が含まれています。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが間違っています。',
    'date' => ':attribute は有効な日付でなければなりません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format の形式と一致しなければなりません。',
    'decimal' => ':attribute は :decimal 桁の小数でなければなりません。',
    'declined' => ':attribute を辞退する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute を辞退する必要があります。',
    'different' => ':attribute と :other は異なっていなければなりません。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min から :max 桁の間でなければなりません。',
    'dimensions' => ':attribute の画像寸法が無効です。',
    'distinct' => ':attribute フィールドには重複した値があります。',
    'doesnt_end_with' => ':attribute は :values のいずれかで終了してはいけません。',
    'doesnt_start_with' => ':attribute は :values のいずれかで開始してはいけません。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は :values のいずれかで終了しなければなりません。',
    'enum' => '選択された :attribute が無効です。',
    'exists' => '選択された :attribute が無効です。',
    'extensions' => ':attribute のファイルは :values のいずれかの拡張子でなければなりません。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'array' => ':attribute には :value 個以上の項目が必要です。',
        'file' => ':attribute は :value キロバイト以上でなければなりません。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'gte' => [
        'array' => ':attribute には :value 個以上の項目が必要です。',
        'file' => ':attribute は :value キロバイト以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'hex_color' => ':attribute は有効な16進数の色でなければなりません。',
    'image' => ':attribute は画像でなければなりません。',
    'in' => '選択された :attribute が無効です。',
    'in_array' => ':attribute フィールドは :other に存在しなければなりません。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'lowercase' => ':attribute は小文字でなければなりません。',
    'lt' => [
        'array' => ':attribute には :value 個未満の項目が必要です。',
        'file' => ':attribute は :value キロバイト未満でなければなりません。',
        'numeric' => ':attribute は :value 未満でなければなりません。',
        'string' => ':attribute は :value 文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attribute には :value 個を超える項目があってはいけません。',
        'file' => ':attribute は :value キロバイト以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string' => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attribute には :max 個を超える項目があってはいけません。',
        'file' => ':attribute は :max キロバイトを超えてはいけません。',
        'numeric' => ':attribute は :max を超えてはいけません。',
        'string' => ':attribute は :max 文字を超えてはいけません。',
    ],
    'max_digits' => ':attribute は :max 桁を超えてはいけません。',
    'mimes' => ':attribute は :values のタイプのファイルでなければなりません。',
    'mimetypes' => ':attribute は :values のタイプのファイルでなければなりません。',
    'min' => [
        'array' => ':attribute には少なくとも :min 個の項目が必要です。',
        'file' => ':attribute は少なくとも :min キロバイトでなければなりません。',
        'numeric' => ':attribute は少なくとも :min でなければなりません。',
        'string' => ':attribute は少なくとも :min 文字でなければなりません。',
    ],
    'min_digits' => ':attribute は少なくとも :min 桁でなければなりません。',
    'missing' => ':attribute フィールドが不足しています。',
    'missing_if' => ':other が :value の場合、:attribute フィールドが不足しています。',
    'missing_unless' => ':other が :value でない限り、:attribute フィールドが不足しています。',
    'missing_with' => ':values が存在する場合、:attribute フィールドが不足しています。',
    'missing_with_all' => ':values が存在する場合、:attribute フィールドが不足しています。',
    'multiple_of' => ':attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute が無効です。',
    'not_regex' => ':attribute の形式が無効です。',
    'numeric' => ':attribute は数字でなければなりません。',
    'password' => [
        'letters' => ':attribute は少なくとも1つの文字を含む必要があります。',
        'mixed' => ':attribute は大文字と小文字の両方を含む必要があります。',
        'numbers' => ':attribute は少なくとも1つの数字を含む必要があります。',
        'symbols' => ':attribute は少なくとも1つの記号を含む必要があります。',
        'uncompromised' => '与えられた :attribute はデータ侵害に関連しています。異なる :attribute を選択してください。',
    ],
    'present' => ':attribute フィールドが存在していなければなりません。',
    'prohibited' => ':attribute フィールドは禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute フィールドは禁止されています。',
    'prohibited_unless' => ':other が :value の場合を除き、:attribute フィールドは禁止されています。',
    'prohibits' => ':attribute フィールドは、:other が存在することを禁止します。',
    'regex' => ':attribute の形式が無効です。',
    'required' => ':attribute フィールドは必須です。',
    'required_array_keys' => ':attribute フィールドには、:values のエントリが含まれていなければなりません。',
    'required_if' => ':other が :value の場合、:attribute フィールドは必須です。',
    'required_if_accepted' => ':other が承認された場合、:attribute フィールドは必須です。',
    'required_unless' => ':other が :values に含まれない限り、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':values のいずれも存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と :other は一致しなければなりません。',
    'size' => [
        'array' => ':attribute には :size 個の項目が含まれていなければなりません。',
        'file' => ':attribute は :size キロバイトでなければなりません。',
        'numeric' => ':attribute は :size でなければなりません。',
        'string' => ':attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => ':attribute は :values のいずれかで始まらなければなりません。',
    'string' => ':attribute は文字列でなければなりません。',
    'timezone' => ':attribute は有効なタイムゾーンでなければなりません。',
    'unique' => ':attribute はすでに使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字でなければなりません。',
    'url' => ':attribute は有効なURLでなければなりません。',
    'ulid' => ':attribute は有効なULIDでなければなりません。',
    'uuid' => ':attribute は有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | ここでは、"属性.ルール"の規約を使用して、カスタムバリデーションメッセージを
    | 指定できます。これにより、特定の属性ルールに対して特定のカスタム言語行を
    | クイックに指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、置き換えられるプレースホルダとして使用されます。
    | たとえば、"email"の代わりに"メールアドレス"を使用して、メッセージを
    | よりわかりやすくします。
    |
    */

    'attributes' => [],
];