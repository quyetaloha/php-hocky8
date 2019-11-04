function cartItems(){
	$('#gio-hang div').mouseover(function() {
		$(this).css({"background-color" : "white"});
		$('#gio-hang img').attr('src','static/images/shopping-cart.png');
	});
	$('#gio-hang div').mouseout(function() {
		$(this).css({"background-color" : "#6b9cff"});
		$('#gio-hang img').attr('src','static/images/shopping-cart(1).png');
	});

}
function showListSearchProduct(data){
	$.ajax({
	    url: "http://localhost:81/webbandienthoai/controller/service/search-product.php",
	    method: "POST",
	    dataType: "html",
	    data: {search: data},
	    success: function(res) {
	    	$('.data-search').html(res);
	    },
    });
}
function num_format(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
}
function loadProduct(list){
	var productSwapperHtml = '', keyRAM='Tất cả', keyTien = 'Tất cả';
    var classD = 'product-detail';
    var classB = 'product-box';
    $.each(list, function(index, element){
    	productSwapperHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p ><a class = "add-to-cart" href="giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+ num_format(element.gia)+' VNĐ</h5></div></div>';
    });
    $('.product-swapper').html(productSwapperHtml);
    $('.id-product').hide();

	$('.a').on("click",function(){
		keyRAM = $(this).html();
		var productHtml = '';
		var product = [];
		if(keyRAM === 'Tất cả' && keyTien ==='Tất cả'){
			$('.product-swapper').html(productSwapperHtml);
	        $('.id-product').hide();
	        $('.a').css("list-style-image", "url(static/images/checkbox.png)");
	   	 	 $(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}else if(keyRAM !== 'Tất cả' && keyTien ==='Tất cả'){
			$.each(list, function(index, element){
		       	if (element.RAM===keyRAM) {
		       		productHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p><a class = "add-to-cart" href="../giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+num_format(element.gia)+'  VNĐ</h5></div></div>';
		       		product.push(element);
		        }
	    	});
			if(product.length==0){
		   		$('.product-swapper').html('</br></br>Không có sản phẩm nào');
		  	}else{
		   		$('.product-swapper').html(productHtml);
		   		$('.id-product').hide();
		  	}
			$('.a').css("list-style-image", "url(static/images/checkbox.png)");
		   	$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}else if(keyRAM === 'Tất cả' && keyTien !== 'Tất cả'){
			if(keyTien==='Dưới 2 triệu'){
	  			var min = 0, max = 2000000;
	  		}else if(keyTien==='Từ 2 đến 5 triệu'){
	  			var min = 2000000, max = 5000000;
	  	 	}else if(keyTien==='Từ 5 đến 10 triệu'){
	  		 	var min = 5000000, max = 10000000;
	  	 	}else if(keyTien==='Từ 10 đến 20 triệu'){
	  		 	var min = 10000000, max = 20000000;
	  	 	}else if(keyTien==='Trên 20 triệu'){
	        	var min = 20000000, max = 100000000;
	     	}
			$.each(list, function(index, element){
		   		var gia = parseInt(element.gia);
		       	if (gia<max && gia>min) {
		       		productHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p><a class = "add-to-cart" href="../giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+num_format(element.gia)+' VNĐ</h5></div></div>';
		       		product.push(element);
		        }
	        });
	   	 	if(product.length==0){
	   			$('.product-swapper').html('</br></br>Không có sản phẩm nào');
		   	}else{
		   	 	$('.product-swapper').html(productHtml);
		   	 	$('.id-product').hide();
		   	}
		   	$('.a').css("list-style-image", "url(static/images/checkbox.png)");
		   	$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}else if(keyRAM !=='Tất cả' && keyTien !== 'Tất cả'){
			if(keyTien==='Dưới 2 triệu'){
	       		var min = 0, max = 2000000;
	     	}else if(keyTien==='Từ 2 đến 5 triệu'){
	       		var min = 2000000, max = 5000000;
	     	}else if(keyTien==='Từ 5 đến 10 triệu'){
	       		var min = 5000000, max = 10000000;
	     	}else if(keyTien==='Từ 10 đến 20 triệu'){
	       		var min = 10000000, max = 20000000;
	     	}else if(keyTien==='Trên 20 triệu'){
	        	var min = 20000000, max = 100000000;
	    	}
			$.each(list, function(index, element){
		   		var gia = parseInt(element.gia);
		        if (gia<max && gia>min && element.RAM === keyRAM) {
		       		productHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p><a class = "add-to-cart" href="../giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+num_format(element.gia)+' VNĐ</h5></div></div>';
		       		product.push(element);
		        }
	    	});
	   		if(product.length==0){
	   			$('.product-swapper').html('</br></br>Không có sản phẩm nào');
		   	}else{
		   	  	$('.product-swapper').html(productHtml);
		   	 	$('.id-product').hide();
		   	}
		   	$('.a').css("list-style-image", "url(static/images/checkbox.png)");
		   	$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}
	});

	$('.b').on("click",function(){
	  	keyTien = $(this).html();
	  	var productHtml = '';
	  	var product = [];
	  	if(keyRAM === 'Tất cả' && keyTien === 'Tất cả'){
			$('.product-swapper').html(productSwapperHtml);
			$('.id-product').hide();
	  		$('.b').css("list-style-image", "url(static/images/checkbox.png)");
	 		$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}else if(keyRAM !== 'Tất cả' && keyTien === 'Tất cả'){
			$.each(list, function(index, element){
	    		if (element.RAM === keyRAM) {
	        		productHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p><a class = "add-to-cart" href="giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+num_format(element.gia)+' VNĐ</h5></div></div>';
	     			product.push(element);
	    		}
	  		});
			if(product.length==0){
	   			$('.product-swapper').html('</br></br>Không có sản phẩm nào');
		  	}else{
			   	$('.product-swapper').html(productHtml);
			   	$('.id-product').hide();
		  	}
			$('.b').css("list-style-image", "url(static/images/checkbox.png)");
	  		$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}else if(keyRAM === 'Tất cả' && keyTien !== 'Tất cả'){
			if(keyTien==='Dưới 2 triệu'){
			    var min = 0, max = 2000000;
			}else if(keyTien==='Từ 2 đến 5 triệu'){
			    var min = 2000000, max = 5000000;
			}else if(keyTien==='Từ 5 đến 10 triệu'){
			    var min = 5000000, max = 10000000;
			}else if(keyTien==='Từ 10 đến 20 triệu'){
				var min = 10000000, max = 20000000;
			}else if(keyTien==='Trên 20 triệu'){
			    var min = 20000000, max = 100000000;
			}
			$.each(list, function(index, element){
	 		 	var gia = parseInt(element.gia);
	     	 	if (gia<max && gia>min) {
		     		productHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p><a class = "add-to-cart" href="../giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+num_format(element.gia)+' VNĐ</h5></div></div>';
		     		product.push(element);
	          	}
	      	});
	 	 	if(product.length==0){
	 			$('.product-swapper').html('</br></br>Không có sản phẩm nào');
	 	 	}else{
	 	 	 	$('.product-swapper').html(productHtml);
	 	 	 	$('.id-product').hide();
	 	 	}
		 	$('.b').css("list-style-image", "url(static/images/checkbox.png)");
		 	$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}else if(keyRAM !=='Tất cả' && keyTien !== 'Tất cả'){
			if(keyTien==='Dưới 2 triệu'){
		       var min = 0, max = 2000000;
		    }else if(keyTien==='Từ 2 đến 5 triệu'){
		       var min = 2000000, max = 5000000;
		    }else if(keyTien==='Từ 5 đến 10 triệu'){
		       var min = 5000000, max = 10000000;
		    }else if(keyTien==='Từ 10 đến 20 triệu'){
		       var min = 10000000, max = 20000000;
		    }else if(keyTien==='Trên 20 triệu'){
		        var min = 20000000, max = 100000000;
		    }
			$.each(list, function(index, element){
	 		 	var gia = parseInt(element.gia);
	     	 	if (gia<max && gia>min && element.RAM===keyRAM) {
	     		 	productHtml += '<div class="'+classB+'"><img src="static/images/'+element.img+'"/><div class="'+classD+'"><h4><a href = "chitiet.php?id='+element.id+'">'+element.namePro+'</a></h4><p class="id-product">'+element.id+'</p><p><a class = "add-to-cart" href="giohang.php?idP='+element.id+'">Add to Cart</a></p><h5>'+num_format(element.gia)+' VNĐ</h5></div></div>';
	     		 	product.push(element);
	          	}
	      	});
	 	 	if(product.length==0){
	 			$('.product-swapper').html('</br></br>Không có sản phẩm nào');
	 	 	}else{
	 	 	 	$('.product-swapper').html(productHtml);
	 	 	 	$('.id-product').hide();
	 	 	}
	 	 	$('.b').css("list-style-image", "url(static/images/checkbox.png)");
	 	 	$(this).css("list-style-image", "url(static/images/checkboxCheck.png)");
		}
	});
}
function setTypeShowProduct(){
	$('#button-list').on('click',function(){
    	  $('.product-swapper div').removeClass('product-box');
    	  $('.product-swapper div').removeClass('product-box-after-after');
    	  $('.product-swapper div').addClass('product-box-after');
    	  $('.product-swapper div div').removeClass('product-detail');
    	  $('.product-swapper div div').removeClass('product-detail-after-after');
    	  $('.product-swapper div div').removeClass('product-box-after');
    	  $('.product-swapper div div').addClass('product-detail-after');
    	  classD='product-detail-after';
    	  classB='product-box-after';
      });
      $('#button-grid').on('click',function(){
      	$('.product-swapper div').removeClass('product-box-after');
      	$('.product-swapper div').removeClass('product-box-after-after');
    	  $('.product-swapper div').addClass('product-box');
      	$('.product-swapper div div').removeClass('product-detail-after');
      	$('.product-swapper div div').removeClass('product-detail-after-after');
      	$('.product-swapper div div').removeClass('product-box');
      	$('.product-swapper div div').addClass('product-detail');
      	classD='product-detail';
      	classB='product-box';
      });
      $('#button-style').on('click', function(){
        $('.product-swapper div').removeClass('product-box');
        $('.product-swapper div').removeClass('product-box-after');
    	  $('.product-swapper div').addClass('product-box-after-after');
    	  $('.product-swapper div div').removeClass('product-detail');
    	  $('.product-swapper div div').removeClass('product-detail-after');
    	  $('.product-swapper div div').removeClass('product-box-after-after');
    	  $('.product-swapper div div').addClass('product-detail-after-after');
    	  classD='product-detail-after-after';
    	  classB='product-box-after-after';
      });
}
