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

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $PromotionalSaleID
 * @property \DTS\eBaySDK\Trading\Enums\ModifyActionCodeType $Action
 * @property \DTS\eBaySDK\Trading\Types\ItemIDArrayType $PromotionalSaleItemIDArray
 * @property integer $StoreCategoryID
 * @property integer $CategoryID
 * @property boolean $AllFixedPriceItems
 * @property boolean $AllStoreInventoryItems
 * @property boolean $AllAuctionItems
 */
class SetPromotionalSaleListingsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'PromotionalSaleID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleID'
        ),
        'Action' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Action'
        ),
        'PromotionalSaleItemIDArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemIDArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleItemIDArray'
        ),
        'StoreCategoryID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ),
        'CategoryID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'AllFixedPriceItems' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllFixedPriceItems'
        ),
        'AllStoreInventoryItems' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllStoreInventoryItems'
        ),
        'AllAuctionItems' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllAuctionItems'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetPromotionalSaleListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
