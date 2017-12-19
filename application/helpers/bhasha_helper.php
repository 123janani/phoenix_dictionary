<?php defined('BASEPATH') OR exit('No direct script access allowed.');



/*SLR conversion,formatting */
if(!function_exists('SLR'))
{
  function SLR($amount)
  {
	$rupees=number_format(($amount/100),2);
	
   return $rupees;
  }
}

/*SLR to cents conversion,formatting */
if(!function_exists('COUNTRY'))
{
  function COUNTRY($code)
	{
		$ci = & get_instance();
        $ci->load->model('common');
        return $ci->common->country_code_to_country($code);
	}
}


/*Encoding for reference Numbers secondary*/
if(!function_exists('NO_EN_SEC'))
{
	function NO_EN_SEC($value)
	{
		$key=4862;
		return ($value+$key);		
	}
}

/*Custom hash encode for table ids*/
if(!function_exists('ID_HASH_EN'))
{
	function ID_HASH_EN($value)
	{
		$key=4862;
		return decoct($value+$key);		
	}
}

/*Custom hash decode for table ids*/
if(!function_exists('ID_HASH_DE'))
{
	function ID_HASH_DE($value)
	{
		$key=4862;
		return octdec($value)-$key;
	}
}

/*Custom encode*/
if(!function_exists('CUSTOM_EN'))
{
	function CUSTOM_EN($value)
	{
		$key=48625784435;
		$value=$value+$key;
		$value=base64_encode($value);
		return $value;	
	}
}

/*Custom encode*/
if(!function_exists('CUSTOM_HASH'))
{
	function CUSTOM_HASH($value)
	{
		$value= md5($value);
		return $value;	
	}
}

/*Custom decode*/
if(!function_exists('CUSTOM_DE'))
{
	function CUSTOM_DE($value)
	{
		$key=48625784435;
		$value=base64_decode($value);
		$value=$value-$key;
		return $value;	
	}
}

/*Retrieve single table value*/
if(!function_exists('FROM_TABLE_ONE'))
{
	function FROM_TABLE_ONE($return,$field,$value,$table)
	{
		$ci = & get_instance();
        $ci->load->model('common');
        return $ci->common->get_single_value($return,$field,$value,$table);
	}
}

/*Retrieve two table value*/
if(!function_exists('FROM_TABLE_TWO'))
{
	function FROM_TABLE_TWO($return,$field1,$value1,$field2,$value2,$table)
	{
		$ci = & get_instance();
        $ci->load->model('common');
        return $ci->common->get_single_value2($return,$field1,$value1,$field2,$value2,$table);
	}
}



/*Check single value exist*/
if(!function_exists('TABLE_VALUE_EXIST_ONE'))
{
	function TABLE_VALUE_EXIST_ONE($key,$value,$table)
	{
		$ci = & get_instance();
        $ci->load->model('common');
        return $ci->common->value_exists($key,$value,$table);
	}
}

/*Check two value exist*/
if(!function_exists('TABLE_VALUE_EXIST_TWO'))
{
	function TABLE_VALUE_EXIST_TWO($key1,$value1,$key2,$value2,$table)
	{
		$ci = & get_instance();
        $ci->load->model('common');
        return $ci->common->value_exists2($key1,$value1,$key2,$value2,$table);
	}
}

/*Check three value exist*/
if(!function_exists('TABLE_VALUE_EXIST_THREE'))
{
	function TABLE_VALUE_EXIST_THREE($key1,$value1,$key2,$value2,$key3,$value3,$table)
	{
		$ci = & get_instance();
        $ci->load->model('common');
        return $ci->common->value_exists3($key1,$value1,$key2,$value2,$key3,$value3,$table);
	}
}

/*STR_TO_QUERY */
if(!function_exists('STR_TO_QUERY'))
{
  function STR_TO_QUERY($string)
  {
	$ci = & get_instance();
    $ci->load->model('common');
    return $ci->common->str_to_query($string);
  }
}


?>