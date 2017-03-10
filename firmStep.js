
function showOrganisation(){
	document.getElementById('selectTitle').style.display = 'none';
	document.getElementById('firstName').style.display = 'none';
	document.getElementById('lastName').style.display = 'none';
	document.getElementById('firstNameLab').style.display = 'none';
	document.getElementById('lastNameLab').style.display = 'none';
	document.getElementById('title').style.display = 'none';
	document.getElementById('organisationName').style.display='block';
	document.getElementById('orgName').style.display='block';
	document.getElementById('anonymous').style.display='none';
	document.getElementById('anonSub').style.display='none';
	document.getElementById('orgSub').style.display='';
	document.getElementById('citizenSub').style.display='none';
}

function showCitizen(){
	document.getElementById('selectTitle').style.display = '';
	document.getElementById('firstName').style.display = '';
	document.getElementById('lastName').style.display = '';
	document.getElementById('firstNameLab').style.display = '';
	document.getElementById('lastNameLab').style.display = '';
	document.getElementById('title').style.display = '';
	document.getElementById('organisationName').style.display='none';
	document.getElementById('orgName').style.display='none';
	document.getElementById('anonymous').style.display='none';
	document.getElementById('anonSub').style.display='none';
	document.getElementById('orgSub').style.display='none';
	document.getElementById('citizenSub').style.display='';
}

function showAnonymous(){
	document.getElementById('selectTitle').style.display = 'none';
	document.getElementById('firstName').style.display = 'none';
	document.getElementById('lastName').style.display = 'none';
	document.getElementById('firstNameLab').style.display = 'none';
	document.getElementById('lastNameLab').style.display = 'none';
	document.getElementById('title').style.display = 'none';
	document.getElementById('organisationName').style.display='none';
	document.getElementById('orgName').style.display='none';
	document.getElementById('anonymous').style.display='';
	document.getElementById('anonSub').style.display='';
	document.getElementById('orgSub').style.display='none';
	document.getElementById('citizenSub').style.display='none';

}

function hideInitial(){
	document.getElementById('orgName').style.display='none';
	document.getElementById('organisationName').style.display='none';
	document.getElementById('anonymous').style.display='none';
	document.getElementById('anonSub').style.display='none';
	document.getElementById('orgSub').style.display='none';
}

