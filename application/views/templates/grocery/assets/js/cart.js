

function plusItem(val){
	var item_qty = parseInt(document.getElementById("qty_"+val).value);
	document.getElementById('qty_'+val).value = item_qty+1;
	if ((item_qty+1) > 0) {
		var item_unit_price = document.getElementById('unit_price_'+val).innerHTML;
		var item_tot_price = (item_qty+1) * item_unit_price;
		document.getElementById('item_tot_price_'+val).innerHTML = item_tot_price;

	}
}
function minusItem(val){
	var item_qty = parseInt(document.getElementById("qty_"+val).value);
	if((item_qty-1)>0){
      document.getElementById('qty_'+val).value = item_qty-1;
      var item_unit_price = document.getElementById('unit_price_'+val).innerHTML;
		var item_tot_price = (item_qty-1) * item_unit_price;
		document.getElementById('item_tot_price_'+val).innerHTML = item_tot_price;

	}
}