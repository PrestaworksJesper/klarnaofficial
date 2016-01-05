<?php

/**
 * Copyright 2012 Klarna AB.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * File containing the Klarna_Checkout_Connector interface
 *
 * PHP version 5.3
 *
 * @category  Payment
 *
 * @author    Klarna <support@klarna.com>
 * @copyright 2012 Klarna AB
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 *
 * @link      http://integration.klarna.com/
 */

/**
 * Interface for the resource object.
 *
 * @category  Payment
 *
 * @author    Majid G. <majid.garmaroudi@klarna.com>
 * @author    David K. <david.keijser@klarna.com>
 * @copyright 2012 Klarna AB
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 *
 * @link      http://integration.klarna.com/
 */
interface Klarna_Checkout_ConnectorInterface
{
    /**
     * Applying the method on the specific resource.
     *
     * @param string                            $method   Http methods
     * @param Klarna_Checkout_ResourceInterface $resource resource
     * @param array                             $options  Options
     */
    public function apply(
        $method,
        Klarna_Checkout_ResourceInterface $resource,
        array $options = null
    );
}
