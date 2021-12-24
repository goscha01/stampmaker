<?php
if (empty($_SESSION["uid"])) {
	echo "    </div>
	</main>
	";
} else {
	getSuggest();
}

function getSuggest()
{
	echo "	<div class='demo bottomright seggestions-section'>	<div id='suggestionbox' onclick='togglesuggestions()'>		Any Suggestions?	</div>	<div class='suggest' id='suggest'>		<div>			<h5>Leave Suggestion</h5>			<div class='insclose' onclick='togglesuggestions()'>Close <img src='assets/img/icons/cross.svg'></div>		</div>		<form action='javascript:suggestion()' method='post'>			<textarea type='text' class='signup form-control' id='suggestText' placeholder='Enter Concerns/Suggestions here.' required></textarea>			<br>			<button class='button_send_concern modals button'>Send</button>		</form>	</div></div></div></main>		    ";}