(function(){
	let a =document.getElementById("flinks");
	if(a){
		let ns = a.querySelectorAll("li");
		let nsl = ns.length;
		let str ='<div class="post-lists"><div class="post-lists-body" id ="flinksH">';
		let bgid = 0;
		const bgs =["bg-white","bg-grey","bg-deepgrey","bg-blue","bg-purple","bg-green","bg-yellow","bg-red","bg-orange"];
		for(let i = 0;i<=nsl-4;i+=4){
			bgid = Math.floor(Math.random() * 9);
			str += (`<div class="post-list-item"><div class="post-list-item-container "><div class="item-label ${bgs[bgid]}"><div class="item-title"><a href="${ns[i+1].innerText}">${ns[i].innerText}</a></div><div class="item-meta clearfix"><div class="item-meta-ico bg-ico-book"style="background: url(${ns[i+2].innerText}) no-repeat;background-size: 40px auto;"></div><div class="item-meta-date">${ns[i+3].innerText}</div></div></div></div></div>`);
		}
		str+='</div></div><style>.post-list-item{width: 50%;min-width: 300px;}</style>';
		let n1 = document.createElement("div");
		n1.innerHTML = str;
		a.parentNode.insertBefore(n1,a);
		a.style="display: none;";
	}else{
	    console.log('No such id "flinksH"');
	}
}())
