<?php
class page{
    private $total;//总共的记录数
    private  $pagesize;//每页显示的条数
    private  $current;//当前页
    private  $pagenum;//总的页数
    
    //分类页的构造方法
    public function __construct($total,$pagesize,$current){
        $this->total=$total;
        $this->pagesize=$pagesize;
        $this->current=$current;
        $this->pagenum=ceil($this->total / $this->pagesize);
    }
    //获取sql的limit条件
    public function getLimit(){
        //计算limit条件
        $lim=($this->current -1) * $this->pagesize;
        return $lim.','.$this->pagesize;
    }
    //获取URL参数，用于在生成分页链接是保存原有的get参数
    private function getUrlParams(){
        $params=$_GET;
        unset($params['page']);
        return http_build_query($params);
    }
    //获取分页链接
    public function showPage(){
        if ($this->pagenum<=1) return '';
        //获取原来的get参数
        $url=$this->getUrlParams();
        //拼接-url参数
        $url=$url ? "?url&page=" : "?page=";
        //拼接首页
        $first='<a href="'.$url.'1">[首页]</a>';
        //拼接上一页
        $prev=($this->current==1) ? '[上一页]': '<a href="'.$url.($this->current-1).'">[上一页]</a>';
        //拼接下一页
        $next=($this->current==$this->pagenum) ? '[下一页]': '<a href="'.$url.($this->current+1).'">[下一页]</a>';
        //拼接尾页
        $last='<a href="'.$url.$this->pagenum.'">[尾页]</a>';
        //组合最终样式
        return "当前为{$this->current}/{$this->pagenum} {$first} {$prev} {$next} {$last}";
        
    }
    
}

?>