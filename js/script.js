if (document.querySelector("#userView button") != null) {
	let btnEdit = document.querySelector("#userView button");
	btnEdit.addEventListener('click',switchView);
}

function switchView() {
	let userView = document.querySelector("#userView");
	let userUpdate = document.querySelector("#userUpdate");

	userView.style.display = 'none';
	userUpdate.style.display = 'block';
}

function changeUrl(url) {

	var pathName = window.location.pathname;
	pathName = pathName.split('/');
	var folder = pathName[1];

	history.replaceState(null,null,window.location.protocol + "//" + window.location.host +'/'+folder+'/'+url);

}
