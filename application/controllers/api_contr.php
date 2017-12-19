<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class api_contr extends CI_Controller {




	public function googleTanslator_se(){
		$q   =  $this->input->post('word'); 
		$url = "https://translate.google.com/translate_a/single?client=at&dt=t&dt=ld&dt=qca&dt=rm&dt=bd&dj=1&hl=es-ES&ie=UTF-8&oe=UTF-8&inputm=2&otf=2&iid=1dd3b944-fa62-4b55-b330-74909a99969e";
		$source='si';
		$target='en';
		$text=$q;
		
        $fields = array(
            'sl' => urlencode($source),
            'tl' => urlencode($target),
            'q' => urlencode($text)
        );

        if(strlen($fields['q'])>=5000)
            throw new \Exception("Maximum number of characters exceeded: 5000");
        
        // URL-ify the data for the POST
        $fields_string = "";
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }

        rtrim($fields_string, '&');

        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);
        $result = json_decode($result);
    	
		return $this->output->set_status_header(200)->set_output(json_encode(

			array("definitionGoogle"=>$result)  //6 send json respond to client

		));
	}
	public function wikidef(){
		
        
		$ln   =  $this->input->post('ln');
		$q   =  $this->input->post('word');
		$url = "https://".$ln.".wikipedia.org/w/api.php?action=query&prop=extracts|info&exintro&titles=".$q."&format=json&explaintext&redirects&inprop=url";
		


        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

        // Execute post
        $result = curl_exec($ch);


        // Close connection
        curl_close($ch);
        $result = json_decode($result);
    	
		return $this->output->set_status_header(200)->set_output(json_encode(

			array("wikidef"=>$result)  //6 send json respond to client

		));
	}



	public function sentences(){
		
		//oken an
		$q   =  $this->input->post('word');
		$url = "http://api.wordnik.com/v4/word.json/".$q."/examples?includeDuplicates=false&useCanonical=false&skip=0&limit=3&api_key=a2a73e7b926c924fad7001ca3111acd55af2ffabf50eb4ae5";
		


        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);
        $result = json_decode($result);
    	
		return $this->output->set_status_header(200)->set_output(json_encode(

			array("sentences"=>$result)  //6 send json respond to client

		));
	}


	public function img_result(){
		
	
		$q   =  $this->input->post('word');
		$url = "https://pixabay.com/api/?key=5673812-e150942f05ad97317fb3ff372&q=".$q."&image_type=photo&pretty=true";
//5673812-e150942f05ad97317fb3ff372
		// Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);
        $result = json_decode($result);
    	
		return $this->output->set_status_header(200)->set_output(json_encode(

			array("img_result"=>$result)  //6 send json respond to client

		));
	}



	public function googleTanslator_es(){
		$q   =  $this->input->post('word'); 
		$url = "https://translate.google.com/translate_a/single?client=at&dt=t&dt=ld&dt=qca&dt=rm&dt=bd&dj=1&hl=es-ES&ie=UTF-8&oe=UTF-8&inputm=2&otf=2&iid=1dd3b944-fa62-4b55-b330-74909a99969e";
		$source='en';
		$target='si';
		$text=$q;
		
        $fields = array(
            'sl' => urlencode($source),
            'tl' => urlencode($target),
            'q' => urlencode($text)
        );

        if(strlen($fields['q'])>=5000)
            throw new \Exception("Maximum number of characters exceeded: 5000");
        
        // URL-ify the data for the POST
        $fields_string = "";
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }

        rtrim($fields_string, '&');

        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);
        $result = json_decode($result);
    	
		return $this->output->set_status_header(200)->set_output(json_encode(

			array("definitionGoogle"=>$result)  //6 send json respond to client

		));
	}

	public function getSugest_es(){
		$q   =  $this->input->post('q');  //3 :catch  client send text via post
		$this->load->model("apimodel"); 
		$result =$this->apimodel->getEnToSingSudgenst($q);  // 4 :find words in database  to suggest

		return $this->output->set_status_header(200)->set_output(json_encode(

			array("suggests"=>$result)  //6 send json respond to client

		));

	}
	public function getWord_es(){
		$word_id   =  $this->input->post('word_id');
		$this->load->model("apimodel");
		$result =$this->apimodel->getEnToSingWordDefinintion($word_id);

		return $this->output->set_status_header(200)->set_output(json_encode(

			array("word_Def"=>$result)

		));

	}



//////////////////////////////////////////////////////
    public function extention_getWord_es(){
        $word   =  $this->input->get('q');
        $this->load->model("apimodel");
        $result =$this->apimodel->extention_getWord_es($word);

        return $this->output->set_status_header(200)->set_output(json_encode(

            array("word"=>$result)

        ));

    }

////////////////////////////////////////////////////////
	public function getSugest_se(){
		$q   =  $this->input->post('q');  //3 :catch  client send text via post
		$this->load->model("apimodel"); 
		$result =$this->apimodel->getSingToEnSudgenst($q);  // 4 :find words in database  to suggest

		return $this->output->set_status_header(200)->set_output(json_encode(

			array("suggests"=>$result)  //6 send json respond to client

		));

	}
	public function getWord_se(){
		$word_id   =  $this->input->post('word_id');
		$this->load->model("apimodel");
		$result =$this->apimodel->getSingToEnWordDefinintion($word_id);

		return $this->output->set_status_header(200)->set_output(json_encode(

			array("word_Def"=>$result)

		));

	}

	public function google_singlish(){
		
		$word   =  $this->input->post('word');
		$url = "http://www.google.com/transliterate/indic?tlqt=1&langpair=en%7Csi&text=".$word."";
		
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

        // Execute post
        $result = curl_exec($ch);

        // Close connection
        curl_close($ch);
        $result = json_decode($result);
    	
		return $this->output->set_status_header(200)->set_output(json_encode(

			array("googleSin"=>$result)  //6 send json respond to client

		));
	}

	


	
}