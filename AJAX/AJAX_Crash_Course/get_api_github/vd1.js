var user=document.getElementById('btn');

user.addEventListener('click',function(){
	var xhr=new XMLHttpRequest();
	xhr.open('GET','https://api.github.com/users',true);
	xhr.onload=function(){

		var convert=JSON.parse(this.responseText);
		var html='';
		console.log(convert);
		for (var i = 0; i < convert.length; i++) {

			html+='<ul class="user">'+
			'<li>'+'<img src="'+convert[i].avatar_url+'" width="60" height="60">'+'</li>'+
			'<li>'+'ID : '+convert[i].id+'</li>'+
			'<li>'+' Login : '+convert[i].login+'</li>'+
			'</ul>';
		}
		
		console.log(html);

		document.getElementById('user').innerHTML=html;
	}
	xhr.send();

});