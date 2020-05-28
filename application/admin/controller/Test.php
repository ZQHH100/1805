<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\image\Exception;

class Test extends Common
{
   public function index(){
       return view();
   }
   public function add(){
      if(request()->isAjax()){
         //接值
          $data=input('post.');
         // //入库
          $info=model('Test')->allowField(true)->save($data);
         //echo 'ajax';die;
         if($info){
            win('添加成功');
        }else{
            fail('添加失败');
        }
     }else{
      return view();
      }
   }
   public function list(){
      if(request()->isAjax()){
         $page=input('get.page');
         $limit=input('get.limit');
         $test_info=model('Test')->page($page,$limit)->select();
         $count=model('Test')->count();
         $info=['code'=>0,'msg'=>'','count'=>$count,'data'=>$test_info];
         echo json_encode($info);
         exit;

      }else{
         return view();
      }
   }
   public function del(){
      $id=input('post.id');//先接收一下id
      $where=[
         'id'=>$id
     ];
     $res=model('Test')->where($where)->delete();
     if($res){
      win('删除成功');
  }else{
      fail('删除失败');
     }
   }

   public function UpdateInfo(){
      $id=input('get.id');
      
      $where=[
         'id'=>$id
     ];
     $data=model('Test')->where($where)->find();
     $this->assign('data',$data);
     return view();
   }
   public function addup(){
      if(request()->isAjax()){
         $data=input('post.');
         $where=[
            'id'=>$data['id']
        ];
        $arr=[
         'name'=>$data['name'],
         'age'=>$data['age'],
         'sex'=>$data['sex']
     ];
     $info=model('Test')->save($arr,$where);
      if($info){
            win('修改成功');
      }else{
            fail('修改失败');
      }
    }
  }
}