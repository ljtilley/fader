jQuery(document).ready(function($){  
	var i = 0;
	var fader = $("#fader p");
	fader.text(outcomes[i]);
	window.setInterval(function (){
		fader.fadeOut(800, function () { fader.text(outcomes[i]); });
		fader.fadeIn(800);
		if(i < outcomes.length - 1){
			i++;
		}
		else {i = 0;}	
	},8000);
});