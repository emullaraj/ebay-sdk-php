<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property integer $ReviewCount
 * @property integer $BuyingGuideCount
 * @property integer $ReviewerRank
 * @property integer $TotalHelpfulnessVotes
 * @property \DTS\eBaySDK\Shopping\Types\ProductIDType $ProductID
 * @property string $ReviewsAndGuidesURL
 * @property integer $PageNumber
 * @property integer $TotalPages
 * @property \DTS\eBaySDK\Shopping\Types\BuyingGuideDetailsType $BuyingGuideDetails
 * @property \DTS\eBaySDK\Shopping\Types\ReviewDetailsType $ReviewDetails
 * @property integer $PositiveHelpfulnessVotes
 */
class FindReviewsAndGuidesResponseType extends \DTS\eBaySDK\Shopping\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ReviewCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewCount'
        ),
        'BuyingGuideCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingGuideCount'
        ),
        'ReviewerRank' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewerRank'
        ),
        'TotalHelpfulnessVotes' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalHelpfulnessVotes'
        ),
        'ProductID' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'ReviewsAndGuidesURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewsAndGuidesURL'
        ),
        'PageNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ),
        'TotalPages' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalPages'
        ),
        'BuyingGuideDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\BuyingGuideDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingGuideDetails'
        ),
        'ReviewDetails' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ReviewDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewDetails'
        ),
        'PositiveHelpfulnessVotes' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveHelpfulnessVotes'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
