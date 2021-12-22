<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p>Sign Up</p>
                <button type="button" class="close button_close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="javascript:ajaxCall()" method="post">
                    <div class="form_row">
                        <i class="fas fa-user"></i>
                        <input type="text" class="signup form-control" id="usernametext" placeholder="Username" required="">
                    </div>
                    <div class="form_row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" class="signup form-control" id="email" placeholder="Email" required="">
                    </div>
                    <div class="form_row">
                        <i class="fas fa-key"></i>
                        <input type="password" class="signup form-control" id="pass" placeholder="Password" required="">
                    </div>
                    <div class="form_option_grid">
                        <div class="form_options">
                            <label>Select Native Language</label>
                            <select class="form-control" id="langS" required="">
                                <option selected="" value="" disabled="">English</option>
                                <option value="English">English</option>
                                <option value="Afrikaans">Afrikaans</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Amharic">Amharic</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Azeri">Azeri</option>
                                <option value="Bantu">Bantu</option>
                                <option value="Belarusan">Belarusan</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Bosnian">Bosnian</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Burmese">Burmese</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Catalan">Catalan</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Creole">Creole</option>
                                <option value="Croatian">Croatian</option>
                                <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Dari">Dari</option>
                                <option value="Dutch">Dutch</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Farsi">Farsi</option>
                                <option value="Finnish">Finnish</option>
                                <option value="Flemish">Flemish</option>
                                <option value="French">French</option>
                                <option value="Galician">Galician</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Greek">Greek</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Haitian Kreyol">Haitian Kreyol</option>
                                <option value="Hausa">Hausa</option>
                                <option value="Hebrew">Hebrew</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Hmong">Hmong</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelandic">Icelandic</option>
                                <option value="Ilokano">Ilokano</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Italian">Italian</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Javanese">Javanese</option>
                                <option value="Karen">Karen</option>
                                <option value="Kashmiri">Kashmiri</option>
                                <option value="Kazakh">Kazakh</option>
                                <option value="Korean">Korean</option>
                                <option value="Kurdish">Kurdish</option>
                                <option value="Ladino">Ladino</option>
                                <option value="Laotian">Laotian</option>
                                <option value="Latin">Latin</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Maay">Maay</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Malay">Malay</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Moldavian">Moldavian</option>
                                <option value="Moldovan">Moldovan</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Pashto">Pashto</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Portuguese - Brazilian">Portuguese - Brazilian</option>
                                <option value="Portuguese - European">Portuguese - European</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Sinhalese">Sinhalese</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovene">Slovene</option>
                                <option value="Somali">Somali</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Swahili">Swahili</option>
                                <option value="Swedish">Swedish</option>
                                <option value="Tagalog">Tagalog</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Thai">Thai</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Twi">Twi</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Uyghur">Uyghur</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Yiddish">Yiddish</option>
                                <option value="Yoruba">Yoruba</option>
                                <option value="Zulu">Zulu</option>
                            </select>
                            <emp style="font-size:15px;text-decoration:underline;" class="notInlisted" id="source">*
                                Language Not Inlisted?</emp>
                            <br>
                            <input type="text" class="signup form-control" id="lang2" placeholder="Write Language Here">
                        </div>
                        <div class="form_options">
                            <label>Select Target Language</label>
                            <select class="form-control" id="langTarget" required="">
                                <option selected="" value="" disabled="">English</option>
                                <option value="English">English</option>
                                <option value="Afrikaans">Afrikaans</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Amharic">Amharic</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Azeri">Azeri</option>
                                <option value="Bantu">Bantu</option>
                                <option value="Belarusan">Belarusan</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Bosnian">Bosnian</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Burmese">Burmese</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Catalan">Catalan</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Creole">Creole</option>
                                <option value="Croatian">Croatian</option>
                                echo json_encode(array("abc"=>'admin')); <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Dari">Dari</option>
                                <option value="Dutch">Dutch</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Farsi">Farsi</option>
                                <option value="Finnish">Finnish</option>
                                <option value="Flemish">Flemish</option>
                                <option value="French">French</option>
                                <option value="Galician">Galician</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Greek">Greek</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Haitian Kreyol">Haitian Kreyol</option>
                                <option value="Hausa">Hausa</option>
                                <option value="Hebrew">Hebrew</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Hmong">Hmong</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelandic">Icelandic</option>
                                <option value="Ilokano">Ilokano</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Italian">Italian</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Javanese">Javanese</option>
                                <option value="Karen">Karen</option>
                                <option value="Kashmiri">Kashmiri</option>
                                <option value="Kazakh">Kazakh</option>
                                <option value="Korean">Korean</option>
                                <option value="Kurdish">Kurdish</option>
                                <option value="Ladino">Ladino</option>
                                <option value="Laotian">Laotian</option>
                                <option value="Latin">Latin</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Maay">Maay</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Malay">Malay</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Moldavian">Moldavian</option>
                                <option value="Moldovan">Moldovan</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Pashto">Pashto</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Portuguese - Brazilian">Portuguese - Brazilian</option>
                                <option value="Portuguese - European">Portuguese - European</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Sinhalese">Sinhalese</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovene">Slovene</option>
                                <option value="Somali">Somali</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Swahili">Swahili</option>
                                <option value="Swedish">Swedish</option>
                                <option value="Tagalog">Tagalog</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Thai">Thai</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Twi">Twi</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Uyghur">Uyghur</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Yiddish">Yiddish</option>
                                <option value="Yoruba">Yoruba</option>
                                <option value="Zulu">Zulu</option>
                            </select>

                            <p style="font-size:15px;text-decoration:underline;" id="target">* Language Not Inlisted?</p>
                            <input type="text" class="signup form-control" id="lang3" placeholder="Write Language Here">
                        </div>
                        <div class="form_options">
                            <label class="checkbox-inline">
                                Not a translator? Why do you use it?
                            </label>
                            <input class="form-control" placeholder="Use case"></input>

                        </div>
                    </div>
                    <div class="form_terms_grid form_checkboxes">
                        <label class="checkbox-inline">
                            I have read and accept <a href="inc/terms.php" target="_blank"><span style="color:#FF8800">Terms</span> <span style="color:#00438B">and</span> <span style="color:#FF8800">Conditions</span></a>
                            &nbsp;&nbsp;<input type="checkbox" id="accept" required="">
                        </label>

                        <div class="field-group">
                            <div><label for="remember-me">Remember me</label><input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["usernameLogin"])) { ?> checked <?php } ?> />

                            </div>
                        </div>
                        <a href="inc/privacy.php" style="float:right;color:#FF8800" target="_blank">Privacy notice</a>

                    </div>
                    <br><br>
                    <center>
                        <button class="btn btn-md modals" id="signup">Sign Up</button>
                    </center>
                </form>

            </div>
        </div>
    </div>
</div>
</div>