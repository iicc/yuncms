<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: jabber <2898117012@qq.com>
// +----------------------------------------------------------------------
namespace app\common\model;

use traits\model\SoftDelete;

/**
 * 管理员用户
 * Class BaseUserModel
 * @package app\common\model
 */
abstract class BaseUserModel extends BaseModel {
    //开启软删除
    use SoftDelete;
    protected $name = 'users';

    /**
     * 创建加密密码
     * @param string $password
     * @return string
     */
    public function createPassWord($password) {
        return md5(md5($password));
    }
}
