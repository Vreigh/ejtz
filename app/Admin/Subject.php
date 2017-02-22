<?php

use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;
use App\Administrator;

Admin::model(\App\Subject::class)->title('Subject')->display(function () {
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('identifier')->label('Identifier'),
		Column::string('name')->label('Name'),
        Column::custom()->label('Color')->callback(function ($instance)
        {
            return '<span style="color: ' . $instance->color . '"> ' . $instance->color . ' </span>';
        }),
	]);
	return $display;
})->createAndEdit(function () {
	$form = AdminForm::form();
	$form->items([
		FormItem::text('identifier', 'Identifier')->required()->validationRules(['alpha_dash']),
		FormItem::text('name', 'Name')->required(),
        FormItem::custom()->display(function ($instance)
        {
            return view('admin.forms.color', ['instance' => $instance]);
        })->callback(function ($instance)
        {
            if(isset($_POST['color'])){
                $instance->color = $_POST['color'];
            }else{
                return Redirect::back()->withInput()->withErrors('nah');
            }
        })
	]);
	
	return $form;
})->delete(function ($instance) {
    return true;
});