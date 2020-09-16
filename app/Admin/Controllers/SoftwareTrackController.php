<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\SoftwareTrack;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;

class SoftwareTrackController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new SoftwareTrack(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('software_id');
            $grid->column('device_id');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new SoftwareTrack(), function (Show $show) {
            $show->field('id');
            $show->field('software_id');
            $show->field('device_id');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new SoftwareTrack(), function (Form $form) {
            $form->display('id');
            $form->text('software_id');
            $form->text('device_id');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}