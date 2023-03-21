<?php

namespace Hexlet\Validator\Tests;

use PHPUnit\Framework\TestCase;
use Hexlet\Validator\Validator;

class ValidatorTest extends TestCase
{
    private Validator $validator;

    protected function setUp(): void
    {
        $this->validator = new Validator();
    }
    public function testString(): void
    {
        $schema = $this->validator->string();

        $this->assertTrue($schema->isValid('')); // true
    }
}
