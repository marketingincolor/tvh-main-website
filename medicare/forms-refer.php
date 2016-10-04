
  <span style="font-family:Arial; font-style:italic;"><span class="form-required">*</span> Required Fields</span>
  <br><br>
    <form name="referForm" id="referForm" accept-charset="utf-8">
    <input type="hidden" name="FormName" id="FormName" value="MedicareReferred">
    <!--<input type="hidden" name="ReturnTo" value="carecenters.php">-->
    <div class="form-all">
          <div style="width:300px; float:left">
            <label class="form-label form-label-top" id="label_4" for="input_4">
              <span class="form-required">
                *
              </span>
              Your Full Name
            </label>
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class="form-textbox validate[required]" type="text" size="30" name="referrerName" id="referrerName" title="Full Name" />
            </span>
          </div>
          <div style="width:300px; float:right">
            <label class="form-label form-label-top" id="label_5" for="input_5">
              <span class="form-required">
                *
              </span>
              Your E-mail
            </label>
            <input type="text" class=" form-textbox validate[required]" id="referrerEmail" name="referrerEmail" size="30" value="" title="EMail"/>
          </div>
          <div id="spacer"></div>
          <br><br><div style="width:300px; float:left">
            <label class="form-label form-label-top" id="label_6" for="input_6">
              <span class="form-required">
                *
              </span>
              Your friend's name
            </label>
            <span class="form-sub-label-container" style="vertical-align: top">
              <input class="form-textbox validate[required]" type="text" size="30" name="referredName" id="referredName" title="Full Name" />
            </span>
          </div>
          <div style="width:300px; float:right">
            <label class="form-label form-label-top" id="label_7" for="input_7">
              <span class="form-required">
                *
              </span>
              Your friend's email address
            </label>
            <input type="text" class=" form-textbox validate[required]" id="referredEmail" name="referredEmail" size="30" value="" title="EMail"/>
          </div>
          <br><br><br><label class="form-label form-label-top">
            Optional: Type a short message.  This message will be added to the email your friend receives.
          </label>
          <textarea name="OptionalMessage" id="OptionalMessage" rows=5 cols=60></textarea>
        
          <div id="spacer"></div>
          <div id="cid_2" class="form-input-wide">
            <div style="text-align:left" class="form-buttons-wrapper">
              <button id="formSubmitButton" class="form-medicare-submit-button" onclick="return false;">
                Send!
              </button>
            </div>
          </div>
    </div>

  </form>
