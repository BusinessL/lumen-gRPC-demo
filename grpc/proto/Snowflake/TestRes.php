<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: snow.proto

namespace Snowflake;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>snowflake.TestRes</code>
 */
class TestRes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 res = 1;</code>
     */
    private $res = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $res
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Snow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 res = 1;</code>
     * @return int|string
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * Generated from protobuf field <code>int64 res = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRes($var)
    {
        GPBUtil::checkInt64($var);
        $this->res = $var;

        return $this;
    }

}

