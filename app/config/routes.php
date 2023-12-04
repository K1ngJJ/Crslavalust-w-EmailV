<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
$router->get('/', 'MainCntrl::getStart');
$router->get('/home', 'MainCntrl::home');


$router->get('/admin', 'AdminCntrl::admin');
$router->post('/save', 'AdminCntrl::save');
$router->get('/edit/(:any)', 'AdminCntrl::edit');
$router->get('/delete/(:any)', 'AdminCntrl::delete');
$router->get('/mail', 'AdminCntrl::mail');


$router->get('/home', 'MainCntrl::home');
$router->get('/about', 'MainCntrl::about');
$router->get('/service', 'MainCntrl::service');
$router->get('/event', 'MainCntrl::event');
$router->get('/menu', 'MainCntrl::menu');
$router->get('/book', 'MainCntrl::book');
$router->get('/blog', 'MainCntrl::blog');
$router->get('/team', 'MainCntrl::team');
$router->get('/testimonial', 'MainCntrl::testimonial');
$router->get('/contact', 'MainCntrl::contact');
$router->get('/login', 'MainCntrl::login');
$router->get('/logout', 'UserCntrl::logout');
$router->get('/register', 'MainCntrl::register');
$router->get('/vfemail', 'MainCntrl::vfemail');


$router->post('/create', 'UserCntrl::create');
$router->post('/auth', 'UserCntrl::auth');

$router->get('/logout', 'UserCntrl::logout');
$router->get('/pending/(:num)', 'UserCntrl::pending');
$router->post('/upload', 'UserCntrl::uploadFile'); 
//para sa login at register
$router->match('/signup', 'MainCntrl::signup', 'GET|POST');


