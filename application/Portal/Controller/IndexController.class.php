<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	
    //首页
	public function index() {
    	$this->display(":index");
    }

    function render($page){
    	if($page==''){

    	}else if($page=='aboutDefault'){
               $this->display('/about:default');
        }
        else if($page=='about2'){
               $this->display('/about:2');
        }
        else if($page=='about3'){
               $this->display('/about:3');
        }
        else if($page=='about4'){
               $this->display('/about:4');
        }
        else if($page=='about5'){
               $this->display('/about:5');
        }
        else if($page=='about6'){
               $this->display('/about:6');
        }
        else if($page=='about7'){
               $this->display('/about:7');
        }
        else if($page=='about8'){
               $this->display('/about:8');
        }

    }

}


