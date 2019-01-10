<?php

class Foo
{
    public static $variavel = 'Valor A';

    public static function valorVariavel()
    {
        return static::$variavel;
    }

    public static function setVariavel($valor)
    {
        static::$variavel = $valor;
    }
}

class Bar extends Foo
{
    // propriedade não foi declarada
}

class FooBar extends Foo
{
    public static $variavel = 'Valor D';
}


echo Foo::valorVariavel(); // retorna "Valor A" que pertence a classe "Foo";

echo Bar::valorVariavel(); // retorna "Valor A" que pertence a classe "Bar";

Bar::setVariavel('Valor C');

echo Foo::valorVariavel(); // retorna "Valor C" que pertence a classe "Foo";

echo Bar::valorVariavel(); // retorna "Valor C" que pertence a classe "Bar";

echo FooBar::valorVariavel(); // retorna "Valor D" que pertence a classe "FooBar";

FooBar::setVariavel('Valor E');

echo Foo::valorVariavel(); // retorna "Valor C" que pertence a classe "Foo";

echo Bar::valorVariavel(); // retorna "Valor C" que pertence a classe "Bar";

echo FooBar::valorVariavel(); // retorna "Valor E" que pertence a classe "FooBar";
