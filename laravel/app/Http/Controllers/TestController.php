<?php
/**
 *
 * User: Bruce
 * Date: 2016-04-18 13:38
 * Time: 13:38
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function __construct()
    {

    }

    protected function index()
    {
        echo 'index';
    }

    protected function hello()
    {
        echo 'hello laravel';
    }

    protected function edit()
    {
        echo 'edit';
    }

    protected function create()
    {
        echo 'create';
    }
}