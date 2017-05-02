<?php
	class indexController{
		function index(){
/*		    $newobj = M('news');
		    $data = $newobj -> get_news_list();*/
			/*VIEW::assign(array('title'=>'快乐的一天', 'author'=>'开心的一天'));
			VIEW::display('admin/test.html');*/
            $data = $this->get_news_list();
            VIEW::assign(array('data'=>$data));
            VIEW::display('index/index.html');
		}
        private function get_news_list(){
            $newsobj = M('news');
            $data = $newsobj->findAll_orderby_dateline();
            foreach ($data as $k=>$news){
                $data[$k]['content'] = mb_substr(strip_tags($data[$k]['content']), 0, 200);
                $data[$k]['dateline'] = date('Y-m-d H:i:s', $data[$k]['dateline']);
            }
            return $data;
        }
	}
?>