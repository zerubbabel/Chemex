<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Grid\RowAction\ServiceDeleteAction;
use App\Admin\Actions\Grid\RowAction\ServiceIssueAction;
use App\Admin\Actions\Grid\RowAction\ServiceTrackAction;
use App\Admin\Grid\Displayers\RowActions;
use App\Admin\Repositories\ServiceRecord;
use App\Models\DeviceRecord;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

/**
 * @property  DeviceRecord device
 */
class ServiceRecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new ServiceRecord(['device']), function (Grid $grid) {
            $grid->column('id');
            $grid->column('name');
            $grid->column('description');
            $grid->column('status')->switch('green');
            $grid->column('device.name')->link(function () {
                return route('device.records.show', $this->device['id']);
            });
            $grid->actions(function (RowActions $actions) {
                if (Admin::user()->can('service.delete')) {
                    $actions->append(new ServiceDeleteAction());
                }
                if (Admin::user()->can('service.track')) {
                    $actions->append(new ServiceTrackAction());
                }
                if (Admin::user()->can('service.issue')) {
                    $actions->append(new ServiceIssueAction());
                }
            });

            $grid->enableDialogCreate();
            $grid->disableRowSelector();
            $grid->disableDeleteButton();
            $grid->disableBatchActions();

            $grid->toolsWithOutline(false);

            $grid->export();
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id): Show
    {
        return Show::make($id, new ServiceRecord(['device']), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('description');
            $show->field('device.name');
            $show->field('created_at');
            $show->field('updated_at');

            $show->disableDeleteButton();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        return Form::make(new ServiceRecord(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->text('description');
            $form->switch('status')
                ->default(0)
                ->help('勾选此项为暂停服务。');

            $form->display('created_at');
            $form->display('updated_at');

            $form->disableDeleteButton();
        });
    }
}
