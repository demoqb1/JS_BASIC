/*
readyState:  
	- 0: Requet chưa được khởi tạo 
	- 1: Request đã được thiết lập 
	- 2: Request đã được gửi 
	- 3: Request đang được xử lý 
	- 4: Kết thúc Request
status : Trả về trạng thái dưới dạng một số (ví dụ: 404 cho "Not Found", 200 cho "OK")
*/
var btn=document.getElementById('btn');
//create event listerner
btn.addEventListener('click',loadText);

function loadText(){
	//create xhr object
	var xhr=new XMLHttpRequest();
	//open -type , file/url,async
	xhr.open('GET','sample.txt',true);

	console.log('readyState: ',xhr.readyState);
	xhr.onload=function(){
		if(this.status==200){
			console.log('readyState: ',xhr.readyState);
			console.log('a');
		}
	}
	/*Sự kiện onreadystatechange này sẽ được kích hoạt mỗi khi trạng thái readyState thay đổi
	Thuộc tính readyState giữ trạng thái của XMLHttpRequest. Thuộc tính onreadystatechange định
	 nghĩa một hàm sẽ được thực hiện khi readyState thay đổi.*/
	// xhr.onreadystatechange=function(){
	// 		console.log('readyState: ',xhr.readyState)
	// 	if (this.readyState==4 && this.status==200) {
	// 		console.log(this.responseText);
	// 	}
	// }
	//send request
	xhr.send();
}