<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apphub/v1/apphub_service.proto

namespace Google\Cloud\AppHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for GetApplication.
 *
 * Generated from protobuf message <code>google.cloud.apphub.v1.GetApplicationRequest</code>
 */
class GetApplicationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully qualified name of the Application to fetch.
     * Expected format:
     * `projects/{project}/locations/{location}/applications/{application}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Fully qualified name of the Application to fetch.
     *                     Expected format:
     *                     `projects/{project}/locations/{location}/applications/{application}`. Please see
     *                     {@see AppHubClient::applicationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AppHub\V1\GetApplicationRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Fully qualified name of the Application to fetch.
     *           Expected format:
     *           `projects/{project}/locations/{location}/applications/{application}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apphub\V1\ApphubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully qualified name of the Application to fetch.
     * Expected format:
     * `projects/{project}/locations/{location}/applications/{application}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Fully qualified name of the Application to fetch.
     * Expected format:
     * `projects/{project}/locations/{location}/applications/{application}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

