<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_m extends MY_Model {
	
    public function getmedia($cond=[], $offset = 0, $is_single = false, $is_total = false,$record_limit=MEDIA_RECORD_LIMIT){
        $cond['status < '] = 2;
        $this->db->order_by('created', 'DESC');
        return $this->get('media', $cond, $offset, $is_single, $is_total,$record_limit);
    }
    
    public function getmediacategory($cond=[], $offset = 0, $is_single = false, $is_total = false,$record_limit=MEDIA_RECORD_LIMIT){
        $this->db->select('media_id, module');
        $this->db->group_by('module');
        $this->db->order_by('module');
        $cond['status < '] = 2;
        return $this->get('media', $cond, $offset, $is_single, $is_total,$record_limit);
    }
}
