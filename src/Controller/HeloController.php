<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
	public function index($a = '', $b = '')
	{
		$str = $this->request->data('text1');
        if ($str != null){
            $str = $this->request->data['text1'];
            $this->set('message', 'you typed:' . $str);
        } else {
            $this->set('message','please type...');
        }
	//$this->set('message', 'Hello! this is sample page. ;-)');
	/*
		if ($a == '') {
			$this->setAction('err');
			return;
		}
		$this->autoRender = false;
		echo "<html><head></head><body>";
		echo "<h1>Hello!</h1>";
		echo "<p>これは、サンプルで作成したページです。</p><p>";
		if ($a != '') {
			echo " パラメータA: " . $a;
		}
		if ($b != '') {
			echo " パラメータB: " . $b;
		}
		echo "</p></body></html>";
		*/
	}

	public function err()
	{
		$this->autoRender = false;
		echo "<html><head></head><body>";
		echo "<h1>Hello!</h1>";
		echo "<p>パラメータがありませんでした。</p>";
		echo "</body></html>";
	}
}
