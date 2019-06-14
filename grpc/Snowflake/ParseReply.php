<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: snow.proto

namespace Snowflake;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>snowflake.ParseReply</code>
 */
class ParseReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Unix timestamp
     *
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     */
    private $timestamp = 0;
    /**
     * node id
     *
     * Generated from protobuf field <code>int64 nodeId = 2;</code>
     */
    private $nodeId = 0;
    /**
     * service id
     *
     * Generated from protobuf field <code>int64 serviceId = 3;</code>
     */
    private $serviceId = 0;
    /**
     * sequence number
     *
     * Generated from protobuf field <code>int64 seq = 4;</code>
     */
    private $seq = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp
     *           Unix timestamp
     *     @type int|string $nodeId
     *           node id
     *     @type int|string $serviceId
     *           service id
     *     @type int|string $seq
     *           sequence number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Snow::initOnce();
        parent::__construct($data);
    }

    /**
     * Unix timestamp
     *
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Unix timestamp
     *
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * node id
     *
     * Generated from protobuf field <code>int64 nodeId = 2;</code>
     * @return int|string
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * node id
     *
     * Generated from protobuf field <code>int64 nodeId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkInt64($var);
        $this->nodeId = $var;

        return $this;
    }

    /**
     * service id
     *
     * Generated from protobuf field <code>int64 serviceId = 3;</code>
     * @return int|string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * service id
     *
     * Generated from protobuf field <code>int64 serviceId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkInt64($var);
        $this->serviceId = $var;

        return $this;
    }

    /**
     * sequence number
     *
     * Generated from protobuf field <code>int64 seq = 4;</code>
     * @return int|string
     */
    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * sequence number
     *
     * Generated from protobuf field <code>int64 seq = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeq($var)
    {
        GPBUtil::checkInt64($var);
        $this->seq = $var;

        return $this;
    }

}
