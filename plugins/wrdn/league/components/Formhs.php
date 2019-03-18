<?php namespace Wrdn\League\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use System\Models\File;
use Input;
use Flash;
use Validator;
use Redirect;
use Request;
use Session;
use Wrdn\league\Models\Solorequest;

class Formhs extends ComponentBase {

    public function componentDetails() {
        return [
            'name'  => 'Formhs',
            'description'    => 'form',
        ];
    }

    public function onSave() {

        $validator = Validator::make(
            [
                'cap_fio'       => Input::get('cap_fio'),
                'cap_nick'      => Input::get('cap_nick'),
                'cap_birthday'  => Input::get('cap_birthday'),
                'cap_uni_info'  => Input::get('cap_uni_info'),
                'cap_vk'        => Input::get('cap_vk'),
                'cap_battletag' => Input::get('cap_battletag'),
                'decks'         => Input::get('decks'),


            ],
            [
                'cap_fio'      => 'required',
                'cap_nick'     => 'required',
                'cap_birthday' => 'required',
                'cap_vk'       => 'required',
                'cap_battletag'=> 'required',
                'cap_uni_info' => 'required',
                'decks'        => 'required',
            ]
        );

        if(Session::token() != Input::get('_token')) {
            Flash::error('Неверный CSRF token!');
        } else {
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator);
            } else {

                //  if (Request::post('g-recaptcha-response')) {

                //$g_resp = Request::post('g-recaptcha-response');

                // $google = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld48ZcUAAAAAKc5FjPZHFPydj73Ko7NUqjz1OEx&response=" . $g_resp);
                // $response = json_decode($google, true);
                // if ($response['success']) {
                $request = new Solorequest();
                $request->cap_fio = Input::get('cap_fio');
                $request->cap_nick = Input::get('cap_nick');
                $request->cap_birthday = Input::get('cap_birthday');
                $request->cap_vk = Input::get('cap_vk');
                $request->cap_battletag = Input::get('cap_battletag');
                $request->cap_uni_info = Input::get('cap_uni_info');
                $request->decks = Input::get('decks');


                // Сохранение изображения
                if (Input::hasFile('scard')) {
                    $request->scard = Input::file('scard');
                }
                // Сохранение изображения
                if (Input::hasFile('deckphotos')) {
                    $request->deckphotos = Input::file('deckphotos');
                }
                // Сохранение изображения
                if (Input::hasFile('playerphoto')) {
                    $request->playerphoto = Input::file('playerphoto');
                }

                $request->save();
                Flash::success('Заявка отправлена!');
                // } else {
                //     Flash::error('Произошла какая-то ошибка, введите каптчу заново!');
                //  }
                // } else {
                //     Flash::error('Вы не ввели каптчу!');
                //  }

            }
        }
        return Redirect::back();
    }

}