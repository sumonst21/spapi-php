<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-05-26
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/easy-ship-model/easyShip_2022-03-23.json
* Source MD5 signature: b27b1cd7f23a2cc604d969eced567466
*
*
* Selling Partner API for Easy Ship
* The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.

Your Easy Ship applications can:

* Get available time slots for packages to be scheduled for delivery.

* Schedule, reschedule, and cancel Easy Ship orders.

* Print labels, invoices, and warranties.

See the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide) for the differences in Easy Ship operations by marketplace.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class Easy extends Client {

  /**
  * Operation listHandoverSlots
  *
  */
  public function listHandoverSlots($body = [])
  {
    return $this->send("/easyShip/2022-03-23/timeSlot", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function listHandoverSlotsAsync($body = [])
  {
    return $this->sendAsync("/easyShip/2022-03-23/timeSlot", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getScheduledPackage
  *
  * @param array $queryParams
  *    - *amazonOrderId* string - An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
  *    - *marketplaceId* string - An identifier for the marketplace in which the seller is selling.
  *
  */
  public function getScheduledPackage($queryParams = [])
  {
    return $this->send("/easyShip/2022-03-23/package", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getScheduledPackageAsync($queryParams = [])
  {
    return $this->sendAsync("/easyShip/2022-03-23/package", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation createScheduledPackage
  *
  */
  public function createScheduledPackage($body = [])
  {
    return $this->send("/easyShip/2022-03-23/package", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function createScheduledPackageAsync($body = [])
  {
    return $this->sendAsync("/easyShip/2022-03-23/package", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation updateScheduledPackages
  *
  */
  public function updateScheduledPackages($body = [])
  {
    return $this->send("/easyShip/2022-03-23/package", [
      'method' => 'PATCH',
      'json' => $body
    ]);
  }

  public function updateScheduledPackagesAsync($body = [])
  {
    return $this->sendAsync("/easyShip/2022-03-23/package", [
      'method' => 'PATCH',
      'json' => $body
    ]);
  }
}