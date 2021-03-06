<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model(\App\User::class)->title('Users')->display(function ()
{
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('email')->label('Email'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name')->required()->unique(),
		FormItem::text('email', 'Email')->required()->unique()->validationRule('email'),
	]);
	return $form;
});