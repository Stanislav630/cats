<?php

/**
 * Класс представляет собой описание кота с именем, возрастом и цветами шерсти.
 */
class Cat {
    /** @var bool Указывает, может ли кот летать (всегда false для котов) */
    public static bool $canFly = false;

    /** @var string Имя кота */
    public string $name;

    /** @var int Возраст кота */
    public int $age;

    /** @var array Массив цветов шерсти кота */
    public array $hairColors;

    /** @var bool Указывает, жив ли кот (инициализируется как true) */
    public bool $isAlive;

    /**
     * Конструктор для инициализации кота с заданным именем, возрастом и цветами шерсти.
     *
     * @param string $name Имя кота
     * @param int $age Возраст кота
     * @param array $hairColors Массив цветов шерсти кота
     */
    public function __construct(string $name, int $age, array $hairColors) {
        $this->name = $name;
        $this->age = $age;
        $this->hairColors = $hairColors;
        $this->isAlive = true;
    }

    /**
     * Деструктор для установки значения свойства 'isAlive' в false при уничтожении кота.
     */
    public function __destruct() {
        $this->isAlive = false;
    }

    /**
     * Выбрасывает исключение, указывая на ошибку.
     *
     * @throws Exception
     */
    public function error(): void {
        throw new Exception("Это моя ошибка");
    }
}

?>