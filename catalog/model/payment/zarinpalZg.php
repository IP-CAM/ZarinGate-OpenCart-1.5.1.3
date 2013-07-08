<?php 
class ModelPaymentZARINPAL extends Model {
  	public function getMethod() {
		$this->load->language('payment/zarinpalZg');

		if ($this->config->get('zarinpal_status')) {
      		  	$status = TRUE;
      	} else {
			$status = FALSE;
		}
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'         => 'zarinpalZg',
        		'title'      => $this->language->get('text_title'),
				'sort_order' => $this->config->get('zarinpal_sort_order')
      		);
    	}
   
    	return $method_data;
  	}
}
?>