document.getElementById("solve").addEventListener("click",function(){
	document.getElementById("solve").classList.add("solving");
	solve();
});

function log(msg) {
	solution = document.querySelector("textarea.solution")
	h = solution.innerHTML;
	h = h + msg + "\n";
	solution.innerHTML = h;
	solution.scrollTop = solution.scrollHeight;
}