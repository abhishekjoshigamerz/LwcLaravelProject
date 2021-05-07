@include('frontendview/include/header2')
<div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3 class="text-center">Use Filter to Select your comics</h3>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <select id="statesubject" name="subject" class="form-control subjectlevel" onchange="changeSubject()">
                    <option >Choose Subject</option>
                    <option value="science">Science</option>
                    <option value="maths">Maths</option>
                    <option value="social-science">Social Science</option>
                  </select>
            </div>
            <div class="col-md-6">
                <select  id="languagever" class="form-control" name="languageversion" onchange="changeURL()">
                    <option >Choose Language</option>
                    <option value="english">English</option>
                    <option value="hindi">Hindi</option>
                    <option value="tamil">Tamil</option>
                    <option value="telugu">Telugu</option>
                  </select>
            </div>
          
           
        </div>
    </div>
</div><br /><br />

@include('frontendview/include/footerclass5.blade.php')


