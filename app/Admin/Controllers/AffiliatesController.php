<?php

namespace App\Admin\Controllers;

use App\Models\Affiliate;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AffiliatesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Affiliate';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Affiliate());

        $grid->column('id', __('Id'));
        $grid->column('language_id', __('Language id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('url', __('Url'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Affiliate::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('language_id', __('Language id'));
        $show->field('category_id', __('Category id'));
        $show->field('url', __('Url'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Affiliate());

        $form->number('language_id', __('Language id'));
        $form->number('category_id', __('Category id'));
        $form->text('url', __('Url'));

        return $form;
    }
}
