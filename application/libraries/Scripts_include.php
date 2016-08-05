<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Script_manage
 *
 * @author Himansu
 */
class Scripts_include {
    
    public $jsFile=array('common');
    public $cssFile=array('common');
    
    private $__jsFiles=array(
        'common'=>array(
            '/assets/layout_default/plugins/jQuery/jquery-1.12.0.min.js',
            '/assets/layout_default/plugins/jQueryUI/jquery-ui.min.js',
            '/assets/layout_default/bootstrap-3.3.6/js/bootstrap.min.js',
            '/assets/layout_default/bootstrap-3.3.6/js/bootstrap-dialog.min.js',
            '/assets/layout_default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',                        
            '/assets/layout_default/dist/js/app.js',
            '/js/jquery.validate.min.js',
            '/js/generic_acls.js',            
            '/js/generic.js'
        ),
        'bootstrap_datatable'=>array(
            '/assets/layout_default/plugins/DataTables-1.10.11/jquery.dataTables.min.js',
            //'/assets/layout_default/plugins/DataTables-1.10.11/dataTables.bootstrap.min.js',
            '/assets/layout_default/plugins/DataTables-1.10.11/extensions/Responsive/js/dataTables.responsive.min.js',
            '/assets/layout_default/plugins/DataTables-1.10.11/extensions/Responsive/js/responsive.bootstrap.min.js',
            '/assets/layout_default/plugins/DataTables-1.10.11/extensions/TableTools/js/dataTables.tableTools.min.js',            
            '/assets/layout_default/plugins/DataTables-1.10.11/jquery.dataTables.columnFilter.js',
            
        ),        
        'icheck'=>array(
            '/assets/layout_default/plugins/iCheck/icheck.min.js',
            'custome'=>array("<script>
                        $(function () {
                          $('input').iCheck({
                            checkboxClass: 'icheckbox_square-blue',
                            radioClass: 'iradio_square-blue',
                            increaseArea: '20%' // optional
                          });
                        });
                      </script>"
                )
        ),
        'users'=>array(
            '/js/users.js'
        )
    );
    private $__cssFiles=array(
        'common'=>array(
            '/assets/layout_default/bootstrap-3.3.6/css/bootstrap.min.css',
            '/assets/layout_default/bootstrap-3.3.6/css/bootstrap-dialog.min.css',
            '/assets/layout_default/awesome_font/css/font-awesome.min.css',
            '/assets/layout_default/ionicons-2.0.1/css/ionicons.min.css',
            '/assets/layout_default/source_sans_pro_font/css/fonts.css',            
            '/assets/layout_default/dist/css/AdminLTE.min.css',
            '/assets/layout_default/dist/css/skins/_all-skins.min.css',
            '/assets/layout_default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'
        ),        
        'bootstrap_datatable'=>array(
            '/assets/layout_default/plugins/DataTables-1.10.11/jquery.dataTables.min.css',
            //'/assets/layout_default/plugins/datatables/dataTables.bootstrap.css',
            '/assets/layout_default/plugins/DataTables-1.10.11/extensions/Responsive/css/responsive.dataTables.min.css',
            '/assets/layout_default/plugins/DataTables-1.10.11/extensions/Responsive/css/responsive.bootstrap.min.css',            
            //table tools
            '/assets/layout_default/plugins/DataTables-1.10.11/extensions/TableTools/css/dataTables.tableTools.min.css',
            
        ),
        'icheck'=>array(
            '/assets/layout_default/plugins/iCheck/square/blue.css',
        ),
        'users'=>array()
        
        
    );
    function __construct() {
        
    }
    
    public function includePlugins($plugins=null,$type=null){        
        if(is_array($plugins) && $type=='css'){
            $this->cssFile=array_merge($this->cssFile,$plugins);
        }elseif (is_array($plugins) && $type=='js') {
            $this->jsFile=array_merge($this->jsFile,$plugins);
        }else{
            $this->cssFile=array_merge($this->cssFile,$plugins);
            $this->jsFile=array_merge($this->jsFile,$plugins);
        }
    }
    public function includeCss(){
        $str='';        
        if(is_array($this->cssFile)){            
            foreach($this->cssFile as $pluginName){
                if(array_key_exists($pluginName, $this->__cssFiles)){
                    foreach($this->__cssFiles[$pluginName] as $files){
                        $str.='<link rel="stylesheet" href="'.  base_url($files).'" />';
                    }
                }
            }
        }
        return $str;
    }
    public function includeJs(){
         $str='';      
         
        if(is_array($this->jsFile)){
            foreach($this->jsFile as $key=>$pluginName){                
                if (array_key_exists($pluginName, $this->__jsFiles)){
                    foreach($this->__jsFiles[$pluginName] as $key=>$files){
                        if(is_array($files)){
                            foreach ($files as $scripts){
                                $str.=$scripts;
                            }
                        }else{
                            $str.='<script src="'.  base_url($files).'" ></script>';
                        }                        
                    }
                }
            }
        }
        return $str;
    }
}