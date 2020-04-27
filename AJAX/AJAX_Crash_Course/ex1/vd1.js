var btn=document.getElementById('btn');
btn.addEventListener('click',function(){
	var xhr= new XMLHttpRequest();
	xhr.open('GET','vd1.json',true);
	xhr.onload=function(){
		if (this.status==200) {
			var user=JSON.parse(this.responseText);
			html='';

			html+='<ul>'+
				  '<li>'+user.name +'</li>'+
				  '<li>'+user.age +'</li>'+
				  '<li>'+user.city +'</li>'+
				  '</ul>';
			console.log(html);
			document.getElementById('user').innerHTML=html;
		}
	}
	xhr.send();
});