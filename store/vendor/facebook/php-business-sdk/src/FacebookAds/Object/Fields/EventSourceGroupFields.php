<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class EventSourceGroupFields extends AbstractEnum {

  const BUSINESS = 'business';
  const EVENT_SOURCES = 'event_sources';
  const ID = 'id';
  const NAME = 'name';
  const OWNER_BUSINESS = 'owner_business';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'event_sources' => 'list<ExternalEventSource>',
      'id' => 'string',
      'name' => 'string',
      'owner_business' => 'Business',
    );
  }
}