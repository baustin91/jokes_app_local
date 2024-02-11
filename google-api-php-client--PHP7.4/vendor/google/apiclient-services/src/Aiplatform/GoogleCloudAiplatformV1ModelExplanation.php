<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ModelExplanation extends \Google\Collection
{
  protected $collection_key = 'meanAttributions';
  /**
   * @var GoogleCloudAiplatformV1Attribution[]
   */
  public $meanAttributions;
  protected $meanAttributionsType = GoogleCloudAiplatformV1Attribution::class;
  protected $meanAttributionsDataType = 'array';

  /**
   * @param GoogleCloudAiplatformV1Attribution[]
   */
  public function setMeanAttributions($meanAttributions)
  {
    $this->meanAttributions = $meanAttributions;
  }
  /**
   * @return GoogleCloudAiplatformV1Attribution[]
   */
  public function getMeanAttributions()
  {
    return $this->meanAttributions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ModelExplanation::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ModelExplanation');
