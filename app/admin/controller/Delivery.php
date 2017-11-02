<?php
# +-------------------------------------------------------------
# | CREATE by FJW IN 2017-5-17.
# | 后台Delivery控制器
# | 后台配送方式控制器
# | email: fjwcoder@gmail.com
# +-------------------------------------------------------------
namespace app\admin\controller;
use app\common\controller\Manage;
use app\common\controller\Common;
use think\Controller;
use think\Session;
use think\Cookie;
use think\Config;
use think\Request;
use think\Db;
use think\Cache;



class Delivery extends Manage
{
    // dump(request()->module());//模块
    // dump(request()->controller()); //控制器
    // dump(request()->action()); //方法
    // private $module = '';
    // private $controller = '';

    // public function _initialize(){
    //     $this->module = request()->module();
    //     request()->controller() = request()->controller();
    // }

    public function index()
    {   
        $navid = input('navid', 37, 'intval');
        $nav = adminNav();
        $key = input('post.keyword', '', 'htmlspecialchars,trim');
        $list = db('mall_delivery', [], false) ->order('id desc') -> paginate();
        $this->assign('list', $list);  
        $header =  ['title'=>'商品管理->配送管理->'.$nav[$navid]['title'], 'icon'=>$nav[$navid]['icon'], 
        'form'=>'list', 'navid'=>$navid];
        $this->assign('header', $header);
        $this->assign('keyword', $key?$key:'');
        return $this->fetch();
    }
    


    public function add(){
        if(request()->post()){
            return $this->dataPost('add');
        }
        $navid = input('navid', 37, 'intval');
        $nav = adminNav();
        $this->assign('header', ['title'=>'增加配送', 'icon'=>$nav[$navid]['icon'], 'form'=>'add', 'navid'=>$navid]);
        return $this->fetch('delivery');

    }

    public function edit(){
        
        if(request()->post()){
            return $this->dataPost('edit');
        }
        $navid = input('navid', 0, 'intval');
        $nav = adminNav();
        $id = input('id', 0, 'intval');
        $result = db('mall_delivery', [], false) -> where(array('id'=>$id)) -> find();
        $this->assign('result', $result);
        $this->assign('header', ['title'=>'编辑配送:  【'.$result['title'].'】', 'icon'=>$nav[$navid]['icon'], 'form'=>'edit', 'navid'=>$navid]);
        return $this->fetch('delivery');
    }

    public function del(){
        $id = Request::instance()->param('id');

        $rs = db('mall_delivery')->where(array('id'=>$id))->delete();
        if ($rs) {
            $this->success('删除成功', "Delivery/index");
        } else {
            $this->error('删除失败');
        }
    }

    public function dataPost($type=''){
        $post = request()->post();
        foreach($post as $k=>$v){
            $data[$k] = $v;
        }
        
        unset($data['navid']);
        if($type=='add'){

            $result = db('mall_delivery', [], false) -> insert($data);
        }else{
            $id = $data['id'];
            unset($data['id']);
            $result = db('mall_delivery', [], false) -> where(array('id'=>$id)) ->update($data);
        }

        
        if($result){
            // return $this->success('成功', "request()->controller()/index");
            return $this->success('成功', "Delivery/index");
        }else{
            return $this->error('失败');
        }
    }




}
