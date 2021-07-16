<?php

namespace App\Admin\Controllers;

use App\Models\LanguageDetail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LanguageDetailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LanguageDetail';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LanguageDetail());

        $grid->column('id', __('Id'));
        $grid->column('language_id', __('Language id'));
        $grid->column('feature', __('Feature'));
        $grid->column('ability_todo', __('Ability todo'));
        $grid->column('annual_income', __('Annual income'));
        $grid->column('job_offer', __('Job offer'));
        $grid->column('certificate', __('Certificate'));
        $grid->column('how_to_study', __('How to study'));
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
        $show = new Show(LanguageDetail::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('language_id', __('Language id'));
        $show->field('feature', __('Feature'));
        $show->field('ability_todo', __('Ability todo'));
        $show->field('annual_income', __('Annual income'));
        $show->field('job_offer', __('Job offer'));
        $show->field('certificate', __('Certificate'));
        $show->field('how_to_study', __('How to study'));
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
        $form = new Form(new LanguageDetail());

        $form->text('language_id', __('Language id'));
        $form->text('feature', __('Feature'));
        $form->text('ability_todo', __('Ability todo'));
        $form->text('annual_income', __('Annual income'));
        $form->text('job_offer', __('Job offer'));
        $form->text('certificate', __('Certificate'));
        $form->text('how_to_study', __('How to study'));

        return $form;
    }
}
