<?php


namespace App\DesignPatterns\Structural\Proxy;


class RecordProxy extends Record
{

    private $isDirty = false;

    private $isInitialized = false;


    public function __construct(array $data = [])
    {
        parent::__construct($data);

        if (count($data) > 0) {
            $this->isDirty = true;
            $this->isInitialized = true;
        }
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        $this->isDirty = true;

        parent::__set($name, $value);
    }

    /**
     * @return bool
     */
    public function isDirty(): bool
    {
        return $this->isDirty;
    }



}
