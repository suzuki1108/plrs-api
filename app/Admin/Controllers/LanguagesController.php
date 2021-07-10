<?php

namespace App\Admin\Controllers;

use App\Models\Language;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LanguagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Language';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Language());

        $grid->column('id', __('Id'));
        $grid->column('language_name', __('Language name'));
        $grid->column('img_url', __('Img url'));
        $grid->column('catch_phrase', __('Catch phrase'));
        $grid->column('description', __('Description'));
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
        $show = new Show(Language::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('language_name', __('Language name'));
        $show->field('img_url', __('Img url'));
        $show->field('catch_phrase', __('Catch phrase'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Language());

        $form->text('language_name', __('Language name'));
        $form->text('img_url', __('Img url'));
        $form->text('catch_phrase', __('Catch phrase'));
        $form->text('description', __('Description'));

        return $form;
    }
}
