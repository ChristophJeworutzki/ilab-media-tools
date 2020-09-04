<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace MediaCloud\Vendor\Google\Iam\Admin\V1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * The request to undelete an existing role.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.UndeleteRoleRequest</code>
 */
class UndeleteRoleRequest extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The `name` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `name` value format is described below:
     * * [`projects.roles.undelete()`](/iam/reference/rest/v1/projects.roles/undelete):
     *   `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method undeletes
     *   only [custom roles](/iam/docs/understanding-custom-roles) that have been
     *   created at the project level. Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     * * [`organizations.roles.undelete()`](/iam/reference/rest/v1/organizations.roles/undelete):
     *   `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *   undeletes only [custom roles](/iam/docs/understanding-custom-roles) that
     *   have been created at the organization level. Example request URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 2;</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The `name` parameter's value depends on the target resource for the
     *           request, namely
     *           [`projects`](/iam/reference/rest/v1/projects.roles) or
     *           [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     *           resource type's `name` value format is described below:
     *           * [`projects.roles.undelete()`](/iam/reference/rest/v1/projects.roles/undelete):
     *             `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method undeletes
     *             only [custom roles](/iam/docs/understanding-custom-roles) that have been
     *             created at the project level. Example request URL:
     *             `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     *           * [`organizations.roles.undelete()`](/iam/reference/rest/v1/organizations.roles/undelete):
     *             `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *             undeletes only [custom roles](/iam/docs/understanding-custom-roles) that
     *             have been created at the organization level. Example request URL:
     *             `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     *           Note: Wildcard (*) values are invalid; you must specify a complete project
     *           ID or organization ID.
     *     @type string $etag
     *           Used to perform a consistent read-modify-write.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The `name` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `name` value format is described below:
     * * [`projects.roles.undelete()`](/iam/reference/rest/v1/projects.roles/undelete):
     *   `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method undeletes
     *   only [custom roles](/iam/docs/understanding-custom-roles) that have been
     *   created at the project level. Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     * * [`organizations.roles.undelete()`](/iam/reference/rest/v1/organizations.roles/undelete):
     *   `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *   undeletes only [custom roles](/iam/docs/understanding-custom-roles) that
     *   have been created at the organization level. Example request URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The `name` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `name` value format is described below:
     * * [`projects.roles.undelete()`](/iam/reference/rest/v1/projects.roles/undelete):
     *   `projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`. This method undeletes
     *   only [custom roles](/iam/docs/understanding-custom-roles) that have been
     *   created at the project level. Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles/{CUSTOM_ROLE_ID}`
     * * [`organizations.roles.undelete()`](/iam/reference/rest/v1/organizations.roles/undelete):
     *   `organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`. This method
     *   undeletes only [custom roles](/iam/docs/understanding-custom-roles) that
     *   have been created at the organization level. Example request URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles/{CUSTOM_ROLE_ID}`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, False);
        $this->etag = $var;

        return $this;
    }

}
