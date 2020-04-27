/*JSON là kiểu dữ liệu của object + array trong js
bây giờ các trình duyệt web có một công cụ tích hợp có tên XML HTTP request và công cụ này sẽ thiết lập kết nối với	
URL mà chúng tôi chỉ định và sau đó nó cho phép chúng tôi gửi hoặc nhận dữ liệu*/
//GỌi ajax bằng js thuần
var animalContainer=document.getElementById('animal-info');
var pageCounter=1;	

var btn=document.getElementById("btn");
btn.addEventListener("click",function(){
	//khởi tạo 1 đối tượng xhr để gửi(nhận) request lên sv
	var ourRequest= new  XMLHttpRequest();
	ourRequest.open('GET','https://learnwebcode.github.io/json-example/animals-'+pageCounter+'.json');
	//GET :nhận dữ liệu 
	//POST : gửi dữ liệu lên máy chủ
	console.log('readyState: ',ourRequest.readyState);
	ourRequest.onload=function(){
	//DÙNG HÀM JSON.PARSE ĐỂ CHUYỂN CHUỖI VĂN BẢN Ở URL VỀ THÀNH ĐỐI TƯỢNG JSON
		var ourData=JSON.parse(ourRequest.responseText);
		console.log('readyState: ',ourRequest.readyState);
		console.log(ourData[0]);
		renderHTML(ourData);
	};
	//gửi request
	ourRequest.send();
	pageCounter++;
	if (pageCounter>3) {
		btn.classList.add("hide-me");
	}

});

function renderHTML(ourData){
	var HTMLString="";


	for (var i = 0; i < ourData.length; i++) {
		HTMLString+='<p>'+ ourData[i].name+' is a '+ourData[i].species+'that like eats ';

		for(var j=0;j<ourData[i].foods.likes.length;j++){
			if (j==0) {
				HTMLString+=ourData[i].foods.likes[j];
			}
			else{
				HTMLString+=' and '+ourData[i].foods.likes[j];
			}

		}

		HTMLString+=' And Khong thic ';
		
		for(var j=0;j<ourData[i].foods.dislikes.length;j++){
			if (j==0) {
				HTMLString+=ourData[i].foods.dislikes[j];
			}
			else{
				HTMLString+=' and '+ourData[i].foods.dislikes[j];
			}

		}

		HTMLString+='.</p>';	
	}
	animalContainer.insertAdjacentHTML('beforeend',HTMLString);
	//hàm insertAdjacentHTML để thêm HTML vào vị trí mong muốn 
	

}

