<?php
namespace tutorial;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class Constant extends \Thrift\Type\TConstant
{
    static protected $INT32CONSTANT;
    static protected $MAPCONSTANT;

    protected static function init_INT32CONSTANT()
    {
        return         /**
         * Thrift also lets you define constants for use across languages. Complex
         * types and structs are specified using JSON notation.
         */
9853;
    }

    protected static function init_MAPCONSTANT()
    {
        return array(
            "goodnight" => "moon",
            "hello" => "world",
        );
    }
}