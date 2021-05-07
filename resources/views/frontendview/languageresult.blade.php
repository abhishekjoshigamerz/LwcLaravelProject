@include('frontendview/include/header2')
<div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3 class="text-center">Use Filter to Select your comics</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <select id="statesubject" name="subject" class="form-control subjectlevel" onchange="SuperFunction();">
                    <option >Choose Subject</option>
                   
                   <option value="science"> Science </option>  
                   <option value="maths"> Maths </option>  
                   <option value="social-science"> Social Science </option>  
                  </select>
            </div>
            <div class="col-md-4">
                <select  id="languagever" class="form-control " name="languageversion" onchange="setlanguage()">
                    <option  >Choose Langauge</option>
                    <option value="english">English</option>
                    <option value="hindi">Hindi</option>
                    <option value="telugu">Telugu</option>
                    <option value="tamil">Tamil</option>
                    <option value="malayalam">Malayalam</option>
                  </select>
            </div>
            <div class="col-md-4">
                <select id="subsubject" class="form-control ll" onchange="changeURL()">
                    
                   
                  </select>
            </div>
            <input type="hidden" class="gd2" id="gradeName" value="{{$class}}" />
        </div>
    </div>
</div><br /><br />


@include('frontendview/include/footer')

<script type="text/javascript">
    let subjectID;
    let language;
    let subsubject;
    let URL= document.getElementById("gradeName").value;
   function SuperFunction(){
       var x = document.getElementById("statesubject").value;
        subjectID = x;
        
       if(x=='science'){
        var values = ['Choose your Lesson In','physics','chemistry','biology'];
        
        var select = document.getElementById("subsubject");
        var sel = document.getElementById("subsubject");
       for (i = sel.length - 1; i >= 0; i--) {
       sel.remove(i);
       }
        for(var i =0;i<values.length;i++){
            var opt = values[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            select.appendChild(el);
        }
       }else if(x=='maths'){
           var values = ['Choose your Lesson In','maths'];
           var select = document.getElementById("subsubject");
           var sel = document.getElementById("subsubject");
       for (i = sel.length - 1; i >= 0; i--) {
       sel.remove(i);
       }
           for(var i =0;i<values.length;i++){
               var opt = values[i];
               var el = document.createElement("option");
               el.textContent = opt;
               el.value = opt;
               select.appendChild(el);
           }
       }else if(x=='social-science'){
           var values = ['Choose your Lesson In','history','geography','civics'];
           var select = document.getElementById("subsubject");
           var sel = document.getElementById("subsubject");
       for (i = sel.length - 1; i >= 0; i--) {
       sel.remove(i);
       }
           for(var i =0;i<values.length;i++){
               var opt = values[i];
               var el = document.createElement("option");
               el.textContent = opt;
               el.value = opt;
               select.appendChild(el);
           }
       }
   }
   function setlanguage(){
       language = document.getElementById("languagever").value;
       
   }

   function changeURL(){
       subsubject = document.getElementById("subsubject").value;
      
      var DURL = URL +"/"+ subjectID + "/" + language + "/" + subsubject;
      window.location.href = DURL;
   }


</script>





