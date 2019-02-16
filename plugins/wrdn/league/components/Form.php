<?php namespace Wrdn\League\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Wrdn\League\Models\Request as Req;
use Input;
use Flash;
use Validator;
use Redirect;
use Request;
use Session;

class Form extends ComponentBase {

    public function componentDetails() {
        return [
            'name'  => 'Form',
            'description'    => 'form',
        ];
    }

    public function onSave() {

        $validator = Validator::make(
            [
                'exp'   => Input::get('exp'),
                'age'   => Input::get('age'),
                'link'  => Input::get('link'),
                'viewers'  => Input::get('viewers'),
                'vk'    => Input::get('vk'),
                'short_desc'    => Input::get('short_desc'),
            ],
            [
                'exp'   => 'required',
                'age'   => 'required',
                'link'  => 'required',
                'viewers'=> 'required',
                'vk'    => 'required',
                'short_desc'    => 'required',
            ]
        );

        if(Session::token() != Input::get('_token')) {
            Flash::error('Неверный CSRF token!');
        } else {
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator);
            } else {

                if (Request::post('g-recaptcha-response')) {

                    $g_resp = Request::post('g-recaptcha-response');

                    $google = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfaykgUAAAAAM69sUzkRzo5quc1JHTWyMgbwcSR&response=" . $g_resp);
                    $response = json_decode($google, true);
                    if ($response['success']) {
                        $request = new Req();
                        $request->exp = Input::get('exp');
                        $request->age = Input::get('age');
                        $request->link = Input::get('link');
                        $request->vk = Input::get('vk');
                        $request->viewers = Input::get('viewers');
                        $request->short_desc = Input::get('short_desc');
                        //$request->user_id   = $user->user_id;
                        $request->save();

                        Flash::success('Заявка отправлена!');
                    } else {
                        Flash::error('Произошла какая-то ошибка, введите каптчу заново!');
                    }
                } else {
                    Flash::error('Вы не ввели каптчу!');
                }

            }
        }
        return Redirect::back();
    }

}