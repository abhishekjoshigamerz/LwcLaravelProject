@include('frontendview/include/header2')
<div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3 class="text-center">Use Filter to Select your comics</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><select id="selectclass" name="class" class="form-control subjectlevel">
                <option >Choose Class</option>
            <?php  for($i=0;$i<count($record);$i++){ ?>
                <option value="<?php echo $record[$i]; ?>"><?php echo $record[$i]; ?></option>
              <?php }?>
              </select></div>
            <div class="col-md-3">
                <select id="statesubject" name="subject" class="form-control subjectlevel">
                    <option >Choose Subject</option>
                     
                  </select>
            </div>
            <div class="col-md-3">
                <select  id="languagever" class="form-control " name="languageversion">
                   
                  </select>
            </div>
            <div class="col-md-3">
                <select id="subsubject" class="form-control ll" >
                    
                   
                  </select>
            </div>
            <input type="hidden" class="gd2" id="gradeName" value="" />
        </div>
    </div>
</div><br /><br />

@include('frontendview/include/quizfooter')
