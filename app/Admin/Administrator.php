<?php


use SleepingOwl\Admin\Display\AdminDisplay;
use SleepingOwl\Admin\Form\AdminForm;
use SleepingOwl\Admin\FormItems\FormItem;
use App\Administrator;

Admin::model(\App\Administrator::class)->title('Projects')->display(function () {
	$display = AdminDisplay::table();
	$display->columns([
		Column::string('username')->label('Username'),
		Column::string('name')->label('Name'),
	]);
	
	return $display;
})->createAndEdit(function () {
	$form = AdminForm::form();
	$form->items([
		FormItem::text('username', 'Username')->required(),
		FormItem::text('name', 'Name')->required(),
		FormItem::password('password', 'Password')->required(),
	]);
	
	return $form;
})->delete(function () {
	
	if(Administrator::all()->count() == 1) {
		
		
	} else {
		return true;
	}
}


);