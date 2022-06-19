<?php declare(strict_types=1);

namespace App\Entity;

class TenTen
{
    private string $sentence;
    private array $content = [];

    public function __construct(string $sentence)
    {
        $this->sentence = $sentence;

        $this->content[0] = $sentence;

        for ($i = 1; $i <= 10; $i++) {
            $this->content[$i] = $this->generateLine();
        }
    }

    public function getContent(): array
    {
        return $this->content;
    }

    private function generateLine(): array
    {
        $line = [];
        for ($i = 0; $i < 10; $i++) {
            $line[] = $this->generateRandomHexColor();
        }

        return $line;
    }

    private function generateRandomHexColor(): string
    {
        $sentence = implode('', unpack('C*', $this->sentence));
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, $sentence, STR_PAD_LEFT);
    }
}
