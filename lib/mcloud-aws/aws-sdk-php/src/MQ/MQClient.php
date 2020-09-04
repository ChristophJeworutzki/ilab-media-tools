<?php

namespace MediaCloud\Vendor\Aws\MQ;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AmazonMQ** service.
 * @method \MediaCloud\Vendor\Aws\Result createBroker(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createBrokerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteBroker(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteBrokerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBroker(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBrokerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBrokerEngineTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBrokerEngineTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBrokerInstanceOptions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBrokerInstanceOptionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeConfigurationRevision(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeConfigurationRevisionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listBrokers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listBrokersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listConfigurationRevisions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listConfigurationRevisionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result rebootBroker(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise rebootBrokerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateBroker(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateBrokerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class MQClient extends AwsClient {}