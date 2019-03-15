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
                'game'          => Input::get('game'),
                'team_name'     => Input::get('team_name'),
                'logo'          => Input::get('logo'),
                'university'    => Input::get('university'),
                'cap_fio'       => Input::get('cap_fio'),
                'cap_nick'      => Input::get('cap_nick'),
                'cap_birthday'  => Input::get('cap_birthday'),
                'cap_uni_info'  => Input::get('cap_uni_info'),
                'cap_vk'        => Input::get('cap_vk'),
                'cap_steam'     => Input::get('cap_steam'),
                'cap_teams'     => Input::get('cap_teams'),
                'p2_fio'        => Input::get('p2_fio'),
                'p2_nick'       => Input::get('p2_nick'),
                'p2_birthday'   => Input::get('p2_birthday'),
                'p2_uni_info'   => Input::get('p2_uni_info'),
                'p2_vk'         => Input::get('p2_vk'),
                'p2_steam'      => Input::get('p2_steam'),
                'p2_teams'      => Input::get('p2_teams'),
                'p3_fio'        => Input::get('p3_fio'),
                'p3_nick'       => Input::get('p3_nick'),
                'p3_birthday'   => Input::get('p3_birthday'),
                'p3_uni_info'   => Input::get('p3_uni_info'),
                'p3_vk'         => Input::get('p3_vk'),
                'p3_steam'      => Input::get('p3_steam'),
                'p3_teams'      => Input::get('p3_teams'),
                'p4_fio'        => Input::get('p4_fio'),
                'p4_nick'       => Input::get('p4_nick'),
                'p4_birthday'   => Input::get('p4_birthday'),
                'p4_uni_info'   => Input::get('p4_uni_info'),
                'p4_vk'         => Input::get('p4_vk'),
                'p4_steam'      => Input::get('p4_steam'),
                'p4_teams'      => Input::get('p4_teams'),
                'p5_fio'        => Input::get('p5_fio'),
                'p5_nick'       => Input::get('p5_nick'),
                'p5_birthday'   => Input::get('p5_birthday'),
                'p5_uni_info'   => Input::get('p5_uni_info'),
                'p5_vk'         => Input::get('p5_vk'),
                'p5_steam'      => Input::get('p5_steam'),
                'p5_teams'      => Input::get('p5_teams'),
                'p6_fio'        => Input::get('p6_fio'),
                'p6_nick'       => Input::get('p6_nick'),
                'p6_birthday'   => Input::get('p6_birthday'),
                'p6_uni_info'   => Input::get('p6_uni_info'),
                'p6_vk'         => Input::get('p6_vk'),
                'p6_steam'      => Input::get('p6_steam'),
                'p6_teams'      => Input::get('p6_teams'),

            ],
            [
                'game'         => 'required',
                'team_name'    => 'required',
                'logo'         => 'required',
                'cap_fio'      => 'required',
                'cap_nick'     => 'required',
                'cap_birthday' => 'required',
                'cap_vk'       => 'required',
                'cap_steam'    => 'required',
                'cap_uni_info' => 'required',
                'p2_fio'       => 'required',
                'p2_nick'      => 'required',
                'p2_birthday'  => 'required',
                'p2_vk'        => 'required',
                'p2_steam'     => 'required',
                'p2_uni_info'  => 'required',
                'p3_fio'       => 'required',
                'p3_nick'      => 'required',
                'p3_birthday'  => 'required',
                'p3_vk'        => 'required',
                'p3_steam'     => 'required',
                'p3_uni_info'  => 'required',
                'p4_fio'       => 'required',
                'p4_nick'      => 'required',
                'p4_birthday'  => 'required',
                'p4_vk'        => 'required',
                'p4_steam'     => 'required',
                'p4_uni_info'  => 'required',
                'p5_fio'       => 'required',
                'p5_nick'      => 'required',
                'p5_birthday'  => 'required',
                'p5_vk'        => 'required',
                'p5_steam'     => 'required',
                'p5_uni_info'  => 'required',
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

                    $google = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld48ZcUAAAAAKc5FjPZHFPydj73Ko7NUqjz1OEx&response=" . $g_resp);
                    $response = json_decode($google, true);
                    if ($response['success']) {
                        $request = new Req();
                        $request->game = Input::get('game');
                        $request->team_name = Input::get('team_name');
                        $request->logo = Input::get('logo');
                        $request->university = Input::get('university');
                        $request->cap_fio = Input::get('cap_fio');
                        $request->cap_nick = Input::get('cap_nick');
                        $request->cap_birthday = Input::get('cap_birthday');
                        $request->cap_vk = Input::get('cap_vk');
                        $request->cap_steam = Input::get('cap_steam');
                        $request->cap_uni_info = Input::get('cap_uni_info');
                        $request->p2_fio = Input::get('p2_fio');
                        $request->p2_nick = Input::get('p2_nick');
                        $request->p2_birthday = Input::get('p2_birthday');
                        $request->p2_vk = Input::get('p2_vk');
                        $request->p2_steam = Input::get('p2_steam');
                        $request->p2_uni_info = Input::get('p2_uni_info');
                        $request->p3_fio = Input::get('p3_fio');
                        $request->p3_nick = Input::get('p3_nick');
                        $request->p3_birthday = Input::get('p3_birthday');
                        $request->p3_vk = Input::get('p3_vk');
                        $request->p3_steam = Input::get('p3_steam');
                        $request->p3_uni_info = Input::get('p3_uni_info');
                        $request->p4_fio = Input::get('p4_fio');
                        $request->p4_nick = Input::get('p4_nick');
                        $request->p4_birthday = Input::get('p4_birthday');
                        $request->p4_vk = Input::get('p4_vk');
                        $request->p4_steam = Input::get('p4_steam');
                        $request->p4_uni_info = Input::get('p4_uni_info');
                        $request->p5_fio = Input::get('p5_fio');
                        $request->p5_nick = Input::get('p5_nick');
                        $request->p5_birthday = Input::get('p5_birthday');
                        $request->p5_vk = Input::get('p5_vk');
                        $request->p5_steam = Input::get('p5_steam');
                        $request->p5_uni_info = Input::get('p5_uni_info');
                        $request->p6_fio = Input::get('p6_fio');
                        $request->p6_nick = Input::get('p6_nick');
                        $request->p6_birthday = Input::get('p6_birthday');
                        $request->p6_vk = Input::get('p6_vk');
                        $request->p6_steam = Input::get('p6_steam');
                        $request->p6_uni_info = Input::get('p6_uni_info');

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