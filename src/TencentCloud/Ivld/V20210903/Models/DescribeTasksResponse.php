<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks返回参数结构体
 *
 * @method integer getTotalCount() 获取满足过滤条件的任务总数量
 * @method void setTotalCount(integer $TotalCount) 设置满足过滤条件的任务总数量
 * @method array getTaskInfoSet() 获取满足过滤条件的任务数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfoSet(array $TaskInfoSet) 设置满足过滤条件的任务数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTasksResponse extends AbstractModel
{
    /**
     * @var integer 满足过滤条件的任务总数量
     */
    public $TotalCount;

    /**
     * @var array 满足过滤条件的任务数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfoSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 满足过滤条件的任务总数量
     * @param array $TaskInfoSet 满足过滤条件的任务数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TaskInfoSet",$param) and $param["TaskInfoSet"] !== null) {
            $this->TaskInfoSet = [];
            foreach ($param["TaskInfoSet"] as $key => $value){
                $obj = new TaskInfo();
                $obj->deserialize($value);
                array_push($this->TaskInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
