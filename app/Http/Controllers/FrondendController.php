<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrondendController extends Controller
{
    //
    public function index()
    {
        
        $userdata =  array('categories' => array(
            array('id' => 'Menu1', 'name' => 'MENU',
            'featured' => array(array('name' => 'Doris Hermawan','jabatan' =>'FOUNDER & CHAIRMAN', 'href' => '#', 'imageSrc' => asset("asset/doris.png"), 'imageAlt' => 'Doris Hermawan dengan jabatan FOUNDER & CHAIRMAN.'),
                                        array('name' => 'Endrik Sugianto', 'jabatan' =>'CO-FOUNDER & CEO', 'href' => '#', 'imageSrc' => asset("asset/hendrik.png"), 'imageAlt' => 'Hendrik dengan jabatan CO-FOUNDER & CEO.')),
            'sections' => array(array('id' => 'adetect', 'name' => 'Adetect Jaya Mandiri', 'items' => 
            array(
                array('name' => 'Tentang Adetect', 'href' => url('/about')),
                array('name' => 'Vision & Mission', 'href' => url('/vision-mission')),
                array('name' => 'Basic Workflow', 'href' => url('/basic-workflow')),
                array('name' => 'Support Service', 'href' => url('/support-service')),
                array('name' => 'Our Services', 'href' => url('/our-services')),
            ))))),
            'pages' => array(
                array('name' => 'OUR TEAM', 'href' => url('/our-team')),
                array('name' => 'PORTFOLIO', 'href' => url('/portfolio'))));
            return Inertia::render('Home', [
            'navigation' => $userdata,
            'logo' => asset('asset/logo.png'),
            'adetect' => asset('asset/adetect.png'),
            'tahun' => asset('asset/tahun.png'),
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'navigation' => array(
                'categories' => array(
                    array('id' => 'Menu1', 'name' => 'MENU',
                    'featured' => array(array('name' => 'Doris Hermawan','jabatan' =>'FOUNDER & CHAIRMAN', 'href' => '#', 'imageSrc' => asset("asset/doris.png"), 'imageAlt' => 'Doris Hermawan dengan jabatan FOUNDER & CHAIRMAN.'),
                                            array('name' => 'Endrik Sugianto', 'jabatan' =>'CO-FOUNDER & CEO', 'href' => '#', 'imageSrc' => asset("asset/hendrik.png"), 'imageAlt' => 'Hendrik dengan jabatan CO-FOUNDER & CEO.')),
                    'sections' => array(array('id' => 'adetect', 'name' => 'Adetect Jaya Mandiri', 'items' =>
                    array(
                        array('name' => 'Tentang Adetect', 'href' => url('/about')),
                        array('name' => 'Vision & Mission', 'href' => url('/vision-mission')),
                        array('name' => 'Basic Workflow', 'href' => url('/basic-workflow')),
                        array('name' => 'Support Service', 'href' => url('/support-service')),
                        array('name' => 'Our Services', 'href' => url('/our-services')),
                    ))))),
            'pages' => array(
                array('name' => 'OUR TEAM', 'href' => url('/our-team')),
                array('name' => 'PORTFOLIO', 'href' => url('/portfolio'))
            ),
        ),
            'logo' => asset('asset/logo.png'),
            'adetect' => asset('asset/adetect.png'),
        ]);
    }

    public function visionMission()
    {
        return Inertia::render('VisionMission', [
            'navigation' => array(
                'categories' => array(
                    array('id' => 'Menu1', 'name' => 'MENU',
                    'featured' => array(array('name' => 'Doris Hermawan','jabatan' =>'FOUNDER & CHAIRMAN', 'href' => '#', 'imageSrc' => asset("asset/doris.png"), 'imageAlt' => 'Doris Hermawan dengan jabatan FOUNDER & CHAIRMAN.'),
                                            array('name' => 'Endrik Sugianto', 'jabatan' =>'CO-FOUNDER & CEO', 'href' => '#', 'imageSrc' => asset("asset/hendrik.png"), 'imageAlt' => 'Hendrik dengan jabatan CO-FOUNDER & CEO.')),
                    'sections' => array(array('id' => 'adetect', 'name' => 'Adetect Jaya Mandiri', 'items' =>
                    array(
                        array('name' => 'Tentang Adetect', 'href' => url('/about')),
                        array('name' => 'Vision & Mission', 'href' => url('/vision-mission')),
                        array('name' => 'Basic Workflow', 'href' => url('/basic-workflow')),
                        array('name' => 'Support Service', 'href' => url('/support-service')),
                        array('name' => 'Our Services', 'href' => url('/our-services')),
                    ))))),
            'pages' => array(
                array('name' => 'OUR TEAM', 'href' => url('/our-team')),
                array('name' => 'PORTFOLIO', 'href' => url('/portfolio'))
            ),
        ),
            'logo' => asset('asset/logo.png'),
            'adetect' => asset('asset/adetect.png'),
        ]);
    }
}