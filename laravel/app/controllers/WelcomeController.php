<?php
/**
 * Created by PhpStorm.
 * User: zhipai20
 * Date: 2018/6/5
 * Time: 16:42
 */
class WelcomeController extends Controller
{
    public function index()
    {
        return View::make('welcome.index');
    }
}