function check_submit(id){
	document.getElementById("form_team_id").value=id;
	if(check_message()){
		document.team.submit();
	}
}
function check_message(){
	return confirm("削除します。\nよろしいですか?");
}
