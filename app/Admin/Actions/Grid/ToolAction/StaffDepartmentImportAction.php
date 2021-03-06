<?php

namespace App\Admin\Actions\Grid\ToolAction;

use App\Admin\Forms\StaffDepartmentImportForm;
use Dcat\Admin\Grid\Tools\AbstractTool;
use Dcat\Admin\Widgets\Modal;

class StaffDepartmentImportAction extends AbstractTool
{
    protected $title = '<a class="btn btn-primary" style="color: white;">导入数据</a>';

    /**
     * 渲染模态框
     * @return Modal|string
     */
    public function render()
    {
        return Modal::make()
            ->lg()
            ->body(new StaffDepartmentImportForm())
            ->button($this->title);
    }
}
