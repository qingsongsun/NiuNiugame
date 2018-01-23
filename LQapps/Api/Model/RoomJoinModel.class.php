<?php //设计师说 数据处理，数据回调
namespace Api\Model;
use Member\Api\MemberApi as MemberApi;
use LQLibs\Util\Page;
defined('in_lqweb') or exit('Access Invalid!');

class RoomJoinModel extends PublicModel {
    protected $_validate = array(
        array('zn_member_id','require','缺少必要参数!'), //用户id
        array('zn_room_id','require','缺少必要参数！'), //房间id
        array('zn_member_name','require','缺少必要参数！'), //用户nikenamne
        array('zn_points','require','缺少必要参数！'), //玩家分数
        array('zl_visible','require','缺少必要参数！'), //加入状态
    );
    protected $_auto = array (
        array('zn_cdate','time',1,'function'), // 对create_time字段在更新的时候写入当前时间戳
        array('zn_mdate','time',2,'function'), // 对updatetime字段在更新的时候写入当前时间戳
    );
    public function __construct() {
        parent::__construct();
    }

    //房间人
    public function getRoomList($pagesize=15,$roomid){
        $where = array();
        $where['zl_visible'] = 1;
        $where['zn_room_id'] = $roomid;
        $count= $this->where($where)->count();
        $page=new Page($count,$pagesize);
        $firstRow = $page->firstRow;
        $listRows = $page->listRows;
        $list = $this->where($where)->limit("$firstRow , $listRows")->order('zn_cdate desc')->select();
        $list['count'] = $count;
        return $list;
    }

    public function getRoom($id,$roomid,$sql=''){
        $where = array();
        $where['zn_member_id']= $id;
        $where['zn_room_id'] = $roomid;
        if($sql){
             $field=$this->where($where)->getField($sql);
            return $field;
        }
        return $this->where($where)->find();
    }

    //设置值
    public function setVal($id,$roomid,$sql,$val){
        $where = array();
        $where['zn_member_id'] = $id;
        $where['zn_room_id'] = $roomid;
        $where['zl_visible'] = 1;
         $data= $this->where($where)->setField($sql,$val);
         return $data;
    }

    //加入房间
    public function addRoom($data){
        $memberid = $data['zn_member_id'];
        $roomid = $data['zn_room_id'];
        $v = $this->getRoom($memberid,$roomid);
        //查询是否已加入过
        if(!$v){
            $flag=$this->create($data);
            if(!$flag){
                return $this->getError();
            }
            return $this->add($flag);
        }else{
            $where = array();
            $where['zn_member_id'] = $memberid;
            $where['zn_room_id'] = $roomid;
            return $this->where($where)->setField('zl_visible',1);
        }

    }

    //改变分数
    public function chagePoint($id,$roomid,$points,$type){
        $v = $this->getRoom($id,$roomid);
        if(!$v){
            return 0;
        }
        $dpoints = $v['zn_points'];
        if($type ==1){
            $dpoints += $points;
        }else{
            $dpoints-= $points;
        }
        $flag= $this->setVal($id,$roomid,'zn_points',$dpoints);
        //设置庄家分
        if($v['zn_makers'] ==1){
            $this->setVal($id,$roomid,'zn_maker_points',$dpoints);
        }
        return $flag ? $dpoints:0;
    }

    //退出房间
    public function closeRoom($id,$roomid){
        $point = $this->getRoom($id,$roomid,"zn_points");
        $this->setVal($id,$roomid,'zn_npoints',$point);//记录分数
        $this->setVal($id,$roomid,'zn_points',0);//设置分数
        return $this->setVal($id,$roomid,'zl_visible',0); //设置已推出
    }

    //查询庄家
    public function getMakers($roomid){
        $list =$this->where('zn_room_id='.$roomid)->select();
        foreach ($list as $key => $val){
            if($val['zn_makers'] ==1){
                return $val;
            }
        }
    }

    //设置庄家
    public function setMakers($id,$roomid,$type){
        //type =1是设置庄家，2为取消
        if($type==1){
            $oldmakers = $this->getMakers($roomid);
            $this->setVal($oldmakers['zn_member_id'],$roomid,'zn_makers',0);
            $this->setVal($id,$roomid,'zn_maker_points',$oldmakers['zn_points']);//设置庄家分数
            $flag= $this->setVal($id,$roomid,'zn_makers',1);
        }else{
            $this->setVal($id,$roomid,'zn_maker_points',0);//设置庄家分数
            $flag= $this->setVal($id,$roomid,'zn_makers',0);
        }

        return $flag;
    }

    //压分
    public function chargePoints($id,$roomid,$points){
        $oldmakers = $this->getMakers($roomid);
        $perpoints = $this->getRoom($id,$roomid,'zn_points');
        if($oldmakers['zn_maker_points']<$points){
            return '庄家分数不够';
        }
        lq_test($id);
        lq_test($roomid);
        lq_test($perpoints);
        if($points>$perpoints){
            return '玩家分数不够';
        }
        $spoints = $perpoints - $points; //减少玩家分数
        $dpoints = $oldmakers['zn_maker_points']- $points;//减少庄家分
        $flag =$this->setVal($oldmakers['zn_member_id'],$roomid,'zn_maker_points',$dpoints);
        $this->setVal($id,$roomid,'zn_points',$spoints);
        if($flag){
            return $dpoints;
        }
        return '上分失败，请联系管理员';
    }


}

?>
