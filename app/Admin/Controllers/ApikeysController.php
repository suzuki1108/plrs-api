<?php

namespace App\Admin\Controllers;

use App\Models\Apikey;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ApikeysController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Apikey';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Apikey());

        $grid->column('id', __('id'));
        $grid->column('name', __('name'));
        $grid->column('apikey', __('apikey'));
        $grid->column('created_at', __('created at'));
        $grid->column('updated_at', __('updated at'));

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
        $show = new Show(Apikey::findOrFail($id));
        
        $show->field('id', __('id'));
        $show->field('name', __('name'));
        $show->field('apikey', __('apikey'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Apikey());

        $form->text('name', __('name'));
        $form->text('apikey', __('apikey'));

        return $form;
    }
}
