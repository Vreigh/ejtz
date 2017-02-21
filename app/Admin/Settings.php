<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */
use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;

Admin::model(\App\Settings::class)->title('Settings')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('receiver_email')->label('Contact email'),
	//	Column::string('facebook_link')->label('Address 1 line 2'),
	//	Column::string('twitter link')->label('Address 1 line 3'),

	]);
	return $display;
})->create(function ()
{
	return null;
})->edit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('receiver_email', 'Contact email)')->required(),
	//	FormItem::text('adress_1_line_2', 'Address 1 line 2')->required(),
	//	FormItem::text('adress_1_line_3', 'Address 1 line 3')->required(),
		
	]);
	return $form;
})->delete(null);