<?php

echo json_encode([
    [
        'id' => 1,
        'name' => 'Товар 1'
    ],
    [
        'id' => 2,
        'name' => 'Товар 2'
    ]
], JSON_UNESCAPED_UNICODE);

exit;

$a = '11';
$b = 11;
$array = [];

$user = [
    'name' => 'Иван',
    'age' => 20,
    'languages' => ['ru', 'en']
];

/**
 * Проверяет, знает ли пользователь указанный язык.
 * @param array $user
 * @param string $searchLang
 * @return bool
 */
function isLang(array $user, string $searchLang)
{
    return in_array($searchLang, $user['languages']);
}

class Lang
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Phone
{
    private $name;
    private $price;
    private $description;
}

class User
{
    private $name;
    private $age;
    private $languages = [];

    public function __construct($name, $age, $languages)
    {
        $this->name = $name;
        $this->age = $age;
        $this->languages = $languages;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function isLang(string $searchLang)
    {
        foreach ($this->languages as $language) {
            if ($language->getName() === $searchLang) {
                return true;
            }
        }

        return false;
    }
}

$user = new User(
    'Иван',
    40,
    [
        new Lang('ru'),
        new Lang('fr')
    ]
);

var_dump($user->isLang('en'));
