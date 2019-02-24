<?php

namespace DP\Singleton;

class Singleton
{
    /**
     * @var Singleton
     */
    //static宣言がされているため、
    //クラスのインスタンス化の必要なしにアクセスできる。
    //ただしprivateなので同クラス内のからしかアクセスできない
    private static $singleton;

    //privateなので、同クラス内からしかインスタンス生成をできない。
    //他のクラスからnew Singletonをするとエラーになる。
    //このクラスではgetInstanceがインスタンス生成をしている。
    private function __construct()
    {
        echo "create SingletonClassInstance\n";
    }

    //すでに$singletonにインスタンスがセットされている場合は、newしない。
    public static function getInstance(): Singleton
    {
        //$singletonがstatic宣言されているため、
        //$this->singletonでアクセスできない。
        if (is_null(self::$singleton)) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}
