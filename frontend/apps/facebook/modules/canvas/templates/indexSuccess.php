<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" > </script>
<script src="http://cdn.jquerytools.org/1.1.2/jquery.tools.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var triggers = $("button.modalInput").overlay({ 
		 
	    // some expose tweaks suitable for modal dialogs 
	    expose: { 
	        color: '#ccc', 
	        loadSpeed: 200, 
	        opacity: 0.9 
	    }, 
	 
	    closeOnClick: false 
	});

	var buttons = $("#yesno button").click(function(e) { 
	     
	    // get user input 
	    var yes = buttons.index(this) === 0; 
	 
	    // do something with the answer 
	    triggers.eq(0).html("You clicked " + (yes ? "yes" : "no")); 
	});

	$("#prompt form").submit(function(e) { 
		 
	    // close the overlay 
	    triggers.eq(1).overlay().close(); 
	 
	    // get user input 
	    var input = $("input", this).val(); 
	 
	    // do something with the answer 
	    triggers.eq(1).html(input); 
	 
	    // do not submit the form 
	    return e.preventDefault(); 
	});
	
});

</script>
<style type="text/css">
.modal { 
    background-color:#fff; 
    display:none; 
    width:350px; 
    padding:15px; 
    text-align:left; 
    border:2px solid #333; 
 
    opacity:0.8; 
    -moz-border-radius:6px; 
    -webkit-border-radius:6px; 
    -moz-box-shadow: 0 0 50px #ccc; 
    -webkit-box-shadow: 0 0 50px #ccc; 
} 
 
.modal h2 { 
    background:url(/img/global/info.png) 0 50% no-repeat; 
    margin:0px; 
    padding:10px 0 10px 45px; 
    border-bottom:1px solid #333; 
    font-size:20px; 
}
</style>

<h1>Welcome to FLIP</h1>


<a href="<?php echo url_for("@canvas_rateafriend");?>">Select a friend to rate</a>

<hr />

<a href="<?php echo url_for("@default?module=canvas&action=test"); ?>">Kevin's Test page</a>

<!-- the triggers --> 
<p> 
    <button class="modalInput" rel="#yesno">Yes or no?</button> 
    <button class="modalInput" rel="#prompt">User input</button> 
</p> 
 
<!-- yes/no dialog --> 
<div class="modal" id="yesno"> 
    <h2>This is a modal dialog</h2> 
 
    <p> 
        You can only interact with elements that are inside this dialog. 
        To close it click a button or use the ESC key. 
    </p> 
 
    <!-- yes/no buttons --> 
    <p> 
        <button class="close"> Yes </button> 
        <button class="close"> No </button> 
    </p> 
</div> 
 
<!-- user input dialog --> 
<div class="modal" id="prompt"> 
    <h2>This is a modal dialog</h2> 
 
    <p> 
        You can only interact with elements that are inside this dialog. 
        To close it click a button or use the ESC key. 
    </p> 
 
    <!-- input form. you can press enter too --> 
    <form> 
        <input /> 
        <button type="submit"> OK </button> 
        <button type="button" class="close"> Cancel </button> 
    </form> 
    <br /> 
 
</div>
