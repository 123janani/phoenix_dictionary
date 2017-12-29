<!DOCTYPE html>
<html >
   <head>
      <?php
         $this->load->view('head');
         ?>
      <style type="text/css">
      #foot{
        position: fixed;
    bottom: 0;
    width: 100%;

    
    text-align: center;
      
    
    
    
      }
         #searchq2 {
         padding: 0;
         margin: 0;
         list-style: none;
         position: relative;
         }
         .upperShow{
         z-index: 9;
         background-color: white;
         width: 100%;
         }
         .hideDispl{
         display: none;
         position: absolute;
         }
         .showdispl{
         display: default;
         position: absolute;
         }
         
         

  .toggle.ios, .toggle-on.ios, .toggle-off.ios {
   border-radius: 30px;  
 }
  .toggle.ios .toggle-handle {
   border-radius: 80px; 
 }

                                
         /* Scrollbar */
         ::-webkit-scrollbar {
         width: 8px;
         }
         /* Track */
         ::-webkit-scrollbar-track {
         -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
         -webkit-border-radius: 10px;
         border-radius: 10px;
         }
         /* Handle */
         ::-webkit-scrollbar-thumb {
         -webkit-border-radius: 10px;
         border-radius: 10px;
         background: #your-color;
         -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
         }
         ::-webkit-scrollbar-thumb:window-inactive {
         background: #ffff;
         }
         .edit {
         width: 84px;
         height: 84px;
         overflow: hidden;
         background-position: center center;
         background-repeat: no-repeat;

         }
         #topbar{
         height:400px;
         overflow: scroll;
         overflow-x: hidden;
         }
         #loader-wrapper {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         z-index: 10;
         overflow: hidden;
         // Modernizr no-js fallback
         .no-js & {
         display: none;
         }
         }
         #loader {
         display: block;
         position: relative;
         left: 50%;
         top: 50%;
         width: 150px;
         height: 150px;
         margin: -75px 0 0 -75px;
         border-radius: 50%;
         border: 3px solid transparent;
         border-top-color: #16a085;
         animation: spin 1.7s linear infinite;
         z-index: 11;
         &:before {
         content: "";
         position: absolute;
         top: 5px;
         left: 5px;
         right: 5px;
         bottom: 5px;
         border-radius: 50%;
         border: 3px solid transparent;
         border-top-color: #e74c3c;
         animation: spin-reverse .6s linear infinite;
         }
         &:after {
         content: "";
         position: absolute;
         top: 15px;
         left: 15px;
         right: 15px;
         bottom: 15px;
         border-radius: 50%;
         border: 3px solid transparent;
         border-top-color: #f9c922;
         animation: spin 1s linear infinite;
         }
         }
         // Bourbon mixins
         @include keyframes(spin) {
         0% { 
         @include transform(rotate(0deg));
         }
         100% {
         @include transform(rotate(360deg));
         }
         }
         @include keyframes(spin-reverse) {
         0% { 
         @include transform(rotate(0deg));
         }
         100% {
         @include transform(rotate(-360deg));
         }
         }
         #loader-wrapper .loader-section {
         position: fixed;
         top: 0;
         width: 51%;
         height: 100%;
         background: #fffcfc;
         z-index: 10;
         }
         #loader-wrapper .loader-section.section-left {
         left: 0;
         }
         #loader-wrapper .loader-section.section-right {
         right: 0;
         }
         /* Loaded styles */
         .loaded #loader-wrapper .loader-section.section-left {
         transform: translateX(-100%);
         transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
         }
         .loaded #loader-wrapper .loader-section.section-right {
         transform: translateX(100%);
         transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
         }
         .loaded #loader {
         opacity: 0;
         transition: all 0.3s ease-out;
         }
         .loaded #loader-wrapper {
         visibility: hidden;
         transform: translateY(-100%);
         transition: all 0.2s 1s ease-out;
         }
         .suggest_p {background: #ffff; line-height:20px;  cursor: default;  padding: 10px 0 10px 10px ; margin:0 0 0 0; cursor: pointer;}
         .suggest_p:hover{ background: #e8e5e5; }
         .switch {
         position: relative;
         display: inline-block;
         width: 50px;
        height: 24px;
         }
         
         .switch input {display:none;}
         .slider {
         position: absolute;
         cursor: pointer;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: #ccc;
         -webkit-transition: .4s;
         transition: .4s;
         /*background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' version='1.1' height='40px' width='110px'><text x='24' y='16' fill='black' font-size='11'>off</text></svg>");*/
         }
         .slider:before {
         position: absolute;
         content: "";
         height: 16px;
         width: 16px;
         left: 4px;
         bottom: 4px;
         background-color: white;
         -webkit-transition: .4s;
         transition: .4s;
         }
         input:checked + .slider {
         background-color: #d32f2f;
         padding-top: 5px;
         /* background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' version='1.1' height='40px' width='110px'><text x='8' y='15' fill='white' font-size='11'>on</text></svg>");*/
         }
         input:focus + .slider {
         box-shadow: 0 0 1px #2196F3;
         }
         input:checked + .slider:before {
         -webkit-transform: translateX(26px);
         -ms-transform: translateX(26px);
         transform: translateX(26px);
         }
         /* Rounded sliders */
         .slider.round {
         border-radius: 34px;
         }
         .slider.round:before {
         border-radius: 50%;
         }
         ul#menu li {
         display:inline;
         }
      </style>
      <script type="text/javascript">
         function getMobileOperatingSystem() {
           var userAgent = navigator.userAgent || navigator.vendor || window.opera;
         
               // Windows Phone must come first because its UA also contains "Android"
             if (/windows phone/i.test(userAgent)) {
                 return "Windows Phone";
             }
         
             if (/android/i.test(userAgent)) {
                 return "Android";
             }
         
             // iOS detection from: http://stackoverflow.com/a/9039885/177710
             if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                 return "iOS";
             }
         
             return "Desktop";
         }
         
                  var base_url_ = '<?php echo BASE;?>';
                  var typeSinhOn=false;
                      
                      function SinglishOnchangeEvt(){
                         
                          if($("#singType:checked").val()=='on'){
                             
                               typeSinhOn=true;
                             
                          }else{
                             
                             
                  
                               typeSinhOn=false;
                          }
                      }

                       $(document).ready(function() {
                  
                  
                  setTimeout(function() {
                  $('body').addClass('loaded');
                  }, 1500);
                  
                  });
                        var SgstArray=[];
                      function getBashaSuggestES(q){
                          /*
                            2  :this post ajax reqest to sussensnt for input text q
                          */
                  
                          $.post("<?php echo BASE;?>api_contr/getSugest_es",
                              {
                                  q: q
                                  
                              },
                              function(data, status){
                                  var res = JSON.parse(data);
                  
                                   SgstArray=[];
                                  var htmlSg ="";
                                  var htmlSg_V2 ="";
                                  if(res.suggests.length>0){
                                   hideSorry();
                                  for(var i=0;i<res.suggests.length;i++){
                                   if(haveQ){
                                       SgstArray.push(res.suggests[0]);
                                       getBashaWordDefES(0);
                  
                                       break;
                                   }else{
                                    SgstArray.push(res.suggests[i]);
                                      htmlSg +=
                     "<p class='suggest_p' onClick='getBashaWordDefES("+i+ ")' >"+res.suggests[i].word+"</p>";
                  
                  
                   
                                  }
                                }
                  
                                  
                                  
                                  $('#mySuggests').html(htmlSg);
                                  }else{
                                   $("#radio11").prop("checked", true);

                                   showSorry();
                  
                                  }
                                  
                              });             
                      }
                      
                   var selectedWordIndex=-1;

                      function getBashaWordDefES(p){
                        //alert(p);
                       showsentence_card1();
                       selectedWordIndex=p;
                       getDefWiki('en',SgstArray[p].word);
                       sentences(SgstArray[p].word);
                        getImg(SgstArray[p].word);
                      history.replaceState({urlPath:'/?q='+SgstArray[p].word},"",'/?q='+SgstArray[p].word); 
                  
                        hideSuggest();

                         //alert("hhhhhhffffffffffffffffffffffffffff:"+SgstArray[p].word);
                        googletrns_es(SgstArray[p].word); 
                        $("#searchq2").val(SgstArray[p].word);
                  




                          $.post("<?php echo BASE;?>api_contr/getWord_es",
                              {
                                  word_id:SgstArray[p].word_id
                                  

                              },
                              function(data, status){
                                   var res = JSON.parse(data);
                                   
                                  if(res.word_Def!=undefined){
                                    $('#def_container').css("visibility", 'visible');
                                    $('#word_def_title').html(res.word_Def.word);
                                     $('#word_def_title2').html(res.word_Def.word);
                                     $('#word_def_title3').html(res.word_Def.word);
                                   
                                       
                                    var mg=""+String(res.word_Def.meaning);
                                    
                                    var spltwords=mg.split(',');
                                    var lnth=spltwords.length;
                                    var str="";
                  
                                    for(var i=0;i<lnth;i++){
                                     var pq='.';
                                     if(i<lnth-1){
                                       pq=',';
                                     }else{
                                       pq='.';
                                     }
                             str +="<a href='<?php echo BASE;?>?q="+(spltwords[i]).trim()+"'>"+spltwords[i]+"</a>"+pq;
                  
                                    }
                                    $('#word_def_p').html(str);
                                  }
                                  
                              });             
                      }
                  
                  function getBashaSuggestSE(q){
                          /*
                            2  :this post ajax reqest to sussensnt for input text q
                          */
                          $.post("<?php echo BASE;?>api_contr/getSugest_se",
                              {
                                  q: q
                                  
                              },
                              function(data, status){
                                SgstArray=[];
                                  var res = JSON.parse(data);
                                  if(res.suggests.length>0){
                                   hideSorry();
                                  var htmlSg ="";
                                  for(var i=0;i<res.suggests.length;i++){
                                   if(haveQ){

                                       SgstArray.push(res.suggests[0]);
                                       getBashaWordDefSE(0);
                  
                                       break;
                                   }else{
                  
                  
                                    SgstArray.push(res.suggests[i]);
                                      htmlSg +=
                                   
                     "<p class='suggest_p' onClick='getBashaWordDefSE("+i+ ")' ><b>"+res.suggests[i].word+"</b></p>";
                                  }
                                }
                                  
                                  $('#mySuggests').html(htmlSg);
                                }else{
                                 
                                 $("#radio21").prop("checked", true);
                                 showSorry();
                                }
                                  
                              });          
                                
                      }
                   function showSorry(){
                       var serch1=$('#searchq2').val();
                       $('#form1').val(serch1);
                       $('checkbox21').prop('checked', true);
                       $("#sorry").removeClass("hidden_cls");
                       $("#sorry").addClass("show_cls");
                   }
                    function hideSorry(){
                      $("#sorry").removeClass("show_cls");
                      $("#sorry").addClass("hidden_cls");
                   }
                  
                    function showsentence_card1(){
                      $("#sentence_card1").removeClass("hidden_cls");
                      $("#sentence_card1").addClass("show_cls");
                   }
                    function hidesentence_card1(){
                      $("#sentence_card1").removeClass("show_cls");
                      $("#sentence_card1").addClass("hidden_cls");
                   }
                   function showWkiDef(){
                       
                     
                       $("#word_def1").removeClass("hidden_cls");
                       $("#word_def1").addClass("show_cls");
                   }
                    function hideWkiDef(){
                      $("#word_def1").removeClass("show_cls");
                      $("#word_def1").addClass("hidden_cls");
                   }
                   function showImageRes(){
                       
                     
                       $("#image_resl_div").removeClass("hidden_cls");
                       $("#image_resl_div").addClass("show_cls");
                   }
                  function hideImageRes(){
                      $("#image_resl_div").removeClass("show_cls");
                      $("#image_resl_div").addClass("hidden_cls");
                   }
                  var querySelection=false;
                  var querySelection_word='';
                   function speak(){
                     
                     if(selectedWordIndex>-1){
                       
                       responsiveVoice.speak(SgstArray[selectedWordIndex].word,"US English Female");
                     }else if (querySelection){
                        
                       responsiveVoice.speak(querySelection_word,"Swedish Female");
                     }
                        
                     
                    
                   }
                  
                   function sentences(q){
                  
                       $.post("<?php echo BASE;?>api_contr/sentences",
                              {
                                 
                                  word:q
                                  
                              },
                              function(data, status){
                               
                                   var res = JSON.parse(data);
                                   var reslt=res.sentences.examples;
                                   var lnth= reslt.length;
                                   
                                   var s="";
                                   
                                   if(lnth>0){
                                   for(var i=0;i<lnth;i++){
                  
                                     s+="<h5><li>"+reslt[i].text+"</li></h5>";
                                   }
                                      
                                   $('#sentences_table').html(s);
                                 }else{
                                 

                                 hidesenten();

                                 }
                                  
                                  
                              }); 
                     }  
                  
                  
                  
                  
                    function getDefWiki(ln,q){
                       $.post("<?php echo BASE;?>api_contr/wikidef",
                              {
                                  ln:ln,
                                  word:q
                                  
                              },
                              function(data, status){
                                   var res = JSON.parse(data);
                                   var reslt=res.wikidef.query.pages;
                                   var index=Object.keys(reslt)[0];
                                   if(Object.keys(reslt)[0]!=-1){
                                     var wikidef1=reslt[Object.keys(reslt)[0]].extract;
                                      showWkiDef();
                                   $('#wikiDef_p_1').html(wikidef1);
                                 }else{
                                        hideWkiDef();
                                 }
                  
                                   
                                  
                              }); 
                     }
                     
                  
                     function getImg(q){
                       
                       $.post("<?php echo BASE;?>api_contr/img_result",
                              {
                                  
                                  word:q.trim()  
                                  
                              },
                              function(data, status){
                               
                                   var res = JSON.parse(data);
                                   var reslt=res.img_result.hits;

                                   var s="";
                                   var frow=true;
                                   var c=0;
                                   if(reslt.length>0){                         
                                      
                                     for(var i=0;i<reslt.length;i++){
                  
                                       if(c<reslt.length && c<12){
                                        
                                         s+="<li class='list-inline-item'><div class='edit'><a href='"+reslt[c].webformatURL+"' target='_blank'><img src='"+reslt[c].previewURL+"'/></a></div> </li>";
                                         c++;
                                       }else{
                                         frow=false;break;
                                       }                            
                                    
                                   }
                                   showImageRes();
                                   $('#img_result_table').html(s);

                                   }else{
                                    hideImageRes();
                                   
                                   }
                                   
                                   
                                  
                  
                  
                  
                  
                  
                                   
                                  
                              }); 
                     }
                  
                  
                      function getBashaWordDefSE(p){
                       hidesentence_card1();
                       selectedWordIndex=-1;
                       getDefWiki('si',SgstArray[p].word);
                       history.replaceState({urlPath:'/?q='+SgstArray[p].word},"",'/?q='+SgstArray[p].word); 
                        hideSuggest();
                        
                        googletrns_se( SgstArray[p].word);
                        $("#searchq2").val(SgstArray[p].word);                       
                        
                        googletrns_se_getTranslit(SgstArray[p].word);
                  
                          $.post("<?php echo BASE;?>api_contr/getWord_se",
                              {
                                  word_id:SgstArray[p].word_id
                                  
                              },
                              function(data, status){
                                   var res = JSON.parse(data);
                                  if(res.word_Def!=undefined){
                                    $('#def_container').css("visibility", 'visible');
                                    $('#word_def_title').html(res.word_Def.word);
                                     $('#word_def_title2').html(res.word_Def.word);
                                     $('#word_def_title3').html(res.word_Def.word);
                                    
                                    var mg=""+String(res.word_Def.meaning);
                                    
                                    var spltwords=mg.split(',');
                                    var lnth=spltwords.length;
                                    var str="";
                                    querySelection=true;
                                    
                                    getImg(spltwords[0]);
                                    for(var i=0;i<lnth;i++){
                                      var pq='.';
                                     if(i<lnth-1){
                                       pq=',';
                                     }else{
                                       pq='.';
                                     }
                             str +="<a href='<?php echo BASE;?>?q="+(spltwords[i]).trim()+"'>"+spltwords[i]+"</a>"+pq;
                  
                                    }
                                    $('#word_def_p').html(str);      
                                  }
                                  
                              });  
                  
                      }



/////////
    function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
         
         
      var q=e.results[0][0].transcript;
      qvalue=q;
      viewSecond(qvalue);
      SearchWord();
      haveQ=true;
      recognition.stop();
        
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
  /////////
                  
                  
                  
                   
               
      </script>
   </head>
   <body>
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- Start your project here-->
      <div id="demo" class="show_cls">
         <br><br><br><br>
         <div class="container-fluid">
            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                  <center>
                     <img src="<?php echo ASSETS;?>img/du.png" class="img-fluid "  alt="Responsive image" width="200">
                  </center>
                  <div style="height: 80px;"></div>
                  <div class="md-form " >
                     
                    <!--up-->
                    <center>
                    <ul class="list-inline">
  <li class="list-inline-item"> <input type="text" id="search"  autofocus="autofocus"  class="form-control" placeholder="Search Here" style="font-weight: bold; font-size: 20px; width: 400px"></li>
  <li class="list-inline-item"><img onclick="startDictation()" style="cursor:pointer"src="//i.imgur.com/cHidSVu.gif" /></li>
  
</ul>
</center>
                       
                         <!--up-->
                        
                     
                  </div>
                 </div>
               <div class="col-md-3"></div>
            </div>

                      <center>
                         <ul class="list-inline">
                            <li class="list-inline-item">
                               <h5>Singlish Typing</h5>
                            </li>
                            <li class="list-inline-item">
                               <label class="switch">
                                  <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                  <input type="checkbox" onClick="SinglishOnchangeEvt()" id="singType">
                                  <div class="slider round"></div>
                               </label>
                            </li>
                         </ul>
                      </center>
                      <div class="row">
                   
                     
                  </div>

                  
               
         </div>
         <div style="height: 80px;"></div>
         
          
              <div class="small" id="foot" style="color:#4d4d4d; font-size:11px;">

            <center>
               © 2018 <a style="color:#d32f2f;" href="https://www.ggslk.com">GGSLK Sri Lanka</a> 
            </center>
        
           </div>
         
        
      </div>
      <script type="text/javascript">
         $('#searchq2').click(function(){
           
         });
         function showSuggest(){
           
            if(!haveQ){
          
           $("#mySuggests").removeClass("hideDispl");
           $("#mySuggests").addClass("showdispl");
          }
         }
         function hideSuggest(){
          
           $("#mySuggests").removeClass("showdispl");
           $("#mySuggests").addClass("hideDispl");
          
         }
      </script>
      <div id="secod" class="hidden_cls">
         <br>
         <div class="container">
            <div class="row wow fadeIn" data-wow-delay="0.2s">
               <div class="col-md-1">
                 <a href="<?php echo BASE;?>"> <img src="<?php echo ASSETS;?>img/du.png" class="img-fluid  "  alt="Responsive image" height="60" width="60"></a>
               </div>
               <div class="col-md-9">
                  <div class="md-form">
                     <input type="text" name="search" class="form-control"  id="searchq2" placeholder="Search" onkeyup="showSuggest()" style="font-weight: bold; font-size: 20px;">
                     <div id="mySuggests" class="hideDispl upperShow" ></div>
                  </div>
               </div>
               
               <div class="col-md-2">
               <div class="row">
                  <center>
                  <span class="col-md-4" style="padding-right: 5px;">
                     <img onclick="startDictation()"  style="cursor:pointer" src="//i.imgur.com/cHidSVu.gif" />
                  </span>
                 <span class="col-md-8" style="margin-top: 10px">

              <label class="switch">
                     <i class="fa fa-paper-plane" aria-hidden="true"></i>
                      <input type="checkbox" onClick="SinglishOnchangeEvt()" id="singType">
                 <div class="slider round"></div>
                      </label>
                  
                 

                 </span>
                 
                 </center>
               </div>
                  
                     
                  
               </div>
               <div class="col-md-3">
                  <div class="row">
                  
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <br>
         <!-- /Start your project here-->
         <div class="container" id="def_container" style="visibility: hidden;">
            <!--First row-->
            <div id="sorry" class="row hidden_cls">
               <div class="col-md-12">
                  <div class="container-fluid">
                     <div class="row wow fadeIn" data-wow-delay="0.2s">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                           <center>
                              
                              <div class="jumbotron">
                                 
                                 <center>
                                    <h1 class="display-4">Sorry</h1>
                                    <h4>This word is not in our dictionary</h4>
                                 </center>
                                 <center>
                                    <h6>When you find it's meaning please enter here also to add it to our dictionary.</h6>
                                 </center>
                                 <form action="<?php echo BASE;?>welcome/addwords" method="post">
                                    <div class="md-form">
                                       <input type="text" name="word" id="form1" class="form-control" placeholder="Word">
                                    </div>
                                    <div class="md-form">
                                       <input type="text" name="meaning" id="form1" class="form-control" placeholder="Meaning">
                                    </div>
                                    <input name="type" type="radio" id="radio11" value="english" checked="checked">
                                    <label for="radio11">English</label>
                                    <input name="type" type="radio" value="sinhala" id="radio21">
                                    <label for="radio21">සිංහල</label>
                                    <center>
                                       <button type="submit" class="btn primary-color btn-rounded">Save</button>
                                       <a type="" href="<?php echo BASE ;?>" class="btn primary-color btn-rounded">Back</a>
                                    </center>
                                 </form>
                              </div>
                           </center>
                        </div>
                        <div class="col-md-1"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div  class="col-md-6 jumbotron" height="48px">
                  <div id="word_def">
                     <div class="row">
                        <div class="col-md-12" style="text-align: left;">
                          
                           <span class="h4-responsive blue-grey-text" id="word_def_title"></span>

                           <span style=" float: right;">
                              <a   onclick="speak()" ><i class="fa fa-volume-up" aria-hidden="true" style="color:#4B515D"></i></a>
                           </span>
                        </div>
                        
                     </div>
                     <hr>
                     <h2 ><a href="#" id="word_def_p">abc</a></h2>
                     <br> <br>
                  </div>
               </div>

               <div  class="col-md-6" id="sentence_card1" >
                  <div  style="padding:  0px 0px 0px 40px !important">
                     <div class="row">
                        <div class="col-md-12">
                           <center>
                         <span class="h4-responsive blue-grey-text"> Sentences</span>  
                             
                           </center>
                           
                        </div>
                     </div>
                    
                     <div class="row">
                        <div class="col-md-12">
                        <hr>
                           
                              <div id="sentences_table">
                              <div style="text-align: center;">
                                <img alt="Waiting" src="<?php echo ASSETS;?>img/lo.gif"  height="100px" >
                              </div>
                               
                              </div>
                           
                           <h6 style="text-align: right; font-size:0.55em;"  >From Wordnik </h6>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <br>
            <div class="row" id="image_resl_div">
               <div class="col-md-12">
                  <center>
                    <ul class="list-inline"> <div id="img_result_table"></div></ul>
                     <span style="font-size:0.55em; float:right;">From pixabay </span>
                     
                  </center>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="word_def1">
                     <div class="row">
                        <div class="col-md-6">
                           <h2>Definition</h2>
                        </div>
                        <div class="col-md-6">
                        </div>
                     </div>
                     <hr>
                     <h5 id="wikiDef_p_1" style="text-align: justify;">
                       <img  alt="Waiting" src="<?php echo ASSETS;?>img/lo.gif"  height="100px" >
                     </h5>
                     <h6 style="font-size:0.55em;text-align: right;">From Wikipedia <i class="fa fa-wikipedia-w" aria-hidden="true"></i>


                     </h6>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="page-footer grey lighten-3 center-on-small-only">
            <!--Footer Links-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                     <center>
                        <h3>Follow Us</h3>
                        <a class="btn-floating btn-small btn-fb" target="_blank" href="https://www.facebook.com/Phoenix-Dictionary-794134880774847/"><i class="fa fa-facebook"> </i></a>
                        <a target="_blank" href="#">
                        <img  alt="Messanger"  src="<?php echo ASSETS;?>img/facebook.png" width="65" height="65">
                        </a>
                        
                         <a class="btn-floating btn-small " target="_blank" href="https://github.com/GGSLK/phoenix_dictionary/"><i class="fa fa-github"> </i></a>
                       
                        
                     </center>
                  </div>
                  <div class="col-md-2"></div>
               </div>
               <!--Second column-->
            </div>
            <!--/.Footer Links-->
            <!--Copyright-->
            <div class="footer small" style="padding-top: 10px">
               <center>
                  © 2017 <a style="color:#d32f2f;" href="http://www.ggslk.com">GGSLK Sri Lanka</a> 


               </center>
               <br> 
            </div>
            <!--/.Copyright-->
         </div>
         <!--/.Footer-->
      </div>
      </div>
      <style type="text/css">
         .show_cls{visibility:visible;display:default;}
         .hidden_cls{visibility: hidden;display:none;}
      </style>
      <!-- /Start your project here-->
      <!-- SCRIPTS -->
      <?php
         $this->load->view('script');
         ?>
      <script type="text/javascript">
         function googletrns_es(word){
             if(word.length>1){
                $.post('<?php echo BASE;?>api_contr/googleTanslator_es',
                       {
                           word:word
                          
                       },
                   function(data, status){
                     var res =JSON.parse(data);
                     
                        v1=res.definitionGoogle.sentences[0].trans;
                        v2=res.definitionGoogle.sentences[1].translit;
                         $('#word_def_p_gt').html(v1+"-"+v2);
                       
                   });
             }
                 
           
         }
         function googletrns_se_getTranslit(word){
         if(word.length>1){
                $.post('<?php echo BASE;?>api_contr/googleTanslator_se',
                       {
                           word:word
                          
                       },
                   function(data, status){
                     var res =JSON.parse(data);
                       
                     
                       v4=(res.definitionGoogle.sentences[1].src_translit);
                      
                       querySelection_word=v4;
                       
                       
                   });  
           
           }
         }
          function googletrns_se(word){
         if(word.length>1){
                $.post('<?php echo BASE;?>api_contr/googleTanslator_se',
                       {
                           word:word
                          
                       },
                   function(data, status){
                     var res =JSON.parse(data);
                       
                       v3=(res.definitionGoogle.sentences[0].trans);
                       v4=(res.definitionGoogle.sentences[1].translit);
                       $('#word_def_p_gt').html(v3+"<br>");
                       
                   });  
           
           }
         }
         
         var isEnglish=true;
         $("#searchq2").keyup(function(){
           
                       haveQ=false;
                       SearchWord();
         
            });
         
         function google_singlish(word){
             if(word.length>1){
                $.post('<?php echo BASE;?>api_contr/google_singlish',
                       {
                           word:word
                          
                       },
                   function(data, status){
                     var res =JSON.parse(data);
                     
                      
                         showSuggest();
                      
                     var predicted_word=res.googleSin[0].hws[0] ;
                     
                     getBashaSuggestSE(predicted_word);
                   });
             }
                 
           
         }
         //google_singlish 
            function SearchWord(){

              if(!secondShowd){
                viewSecond($('#searchq2').val());
              }

              if(typeSinhOn){
                var q=$("#searchq2").val();
                  google_singlish(q);
                
                       
              }else{
               
                   showSuggest();
                
                
                 var q=$("#searchq2").val();
                 
                 if(q.charCodeAt(0)>123){
                   isEnglish=false;
                    getBashaSuggestSE(q);
                 }else{
                   isEnglish=true;
                   getBashaSuggestES(q);// 1 :get value of input html element and send to method 
                 }
              
              }
            }
            
         
            $(document).ready(function(){
            $("#search").keyup(function(){
                var searchq=  $("#search").val();
                
               viewSecond(searchq);
                
            
            });
            });
            function viewSecond(searchq){
              $("#demo").removeClass("show_cls");
                $("#demo").addClass("hidden_cls");
               
                $("#secod").removeClass("hidden_cls");
                $("#secod").addClass("show_cls");
                //$('#exampleModal').openModal();
               
                $("#searchq2").val(searchq);
         
                $("#searchq2").focus();
                  secondShowd=true;
            }

           var secondShowd=false;
            var haveQ=false;
            var qvalue=<?php if( isset( $_GET['q'])){echo "'".$_GET['q']."'";}else{echo -1;}?>;
            if(qvalue !=-1){
              viewSecond(qvalue);
               SearchWord();
               haveQ=true;
         
            }
      </script>
   </body>
</html>
