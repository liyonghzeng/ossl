<?php

namespace App\Admin\Controllers;

use App\VedioModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VedioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\VedioModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VedioModel);

        $grid->column('fid', __('Fid'));
        $grid->column('title', __('Title'));
        $grid->column('pash', __('Pash'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(VedioModel::findOrFail($id));

        $show->field('fid', __('Fid'));
        $show->field('title', __('Title'));
        $show->field('pash', __('Pash'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VedioModel);
        $form->text('title', __('Title'));
        $form->file('pash', __('视频上传'))->uniqueName();
        return $form;
    }
}
