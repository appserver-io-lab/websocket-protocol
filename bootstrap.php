<?php

/**
 * bootstrap.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @author    Johann Zelger <jz@techdivision.com>
 * @author    Bernhard Wick <b.wick@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io-lab/websocket-protocol
 * @link      http://www.appserver.io
 */

$loader = require 'vendor/autoload.php';
$loader->add('AppserverIo\\Lab\\WebSocketProtocol', 'src');
