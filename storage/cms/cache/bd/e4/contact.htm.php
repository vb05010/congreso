<?php 
class Cms60c3d51ae1b94888212970_1bae033590f5f3854f245cd4a45a0ff6Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['bannerImage'] = $this->themeUrl('assets/images/contact-us-banner.jpg');
}
public function onSubmit()
{
    $rules = [
        'name'     => 'required|min:2|max:64',
        'phone'    => 'required',
        'email'    => 'required|email|min:2|max:64',
        'comments' => 'required|min:5',
    ];

    $validation = Validator::make(post(), $rules);
    if ($validation->fails()) {
        throw new ValidationException($validation);
    }

    if (!$group = Backend\Models\UserGroup::whereCode('support-contact')->first()) {
        throw new ApplicationException('Please create an admin group with code: support-contact');
    }

    $contacts = $group->users->lists('full_name', 'email');
    Mail::sendTo($contacts, 'contact::form', post(), function($message) {
        $message->replyTo(post('email'), post('name'));
    });

    $this['success'] = true;
}
}
