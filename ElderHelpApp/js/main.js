

$(document).ready(function(){

	$("#add_row").click(function () {
     $("#tb1").each(function () {
         var tds = '<tr class="row100 body">';
         jQuery.each($('tr:last td', this), function () {
             tds += '<td class="cell100 column1">' + $(this).html() + '</td>';
         });
         tds += '</tr>';
         if ($('tbody', this).length > 0) {
             $('tbody', this).append(tds);
         } else {
             $(this).append(tds);
         }
     });

	});

	$("#del_row").click(function() {
		$('#tb1 tr:last').remove();
		//$("#tr_row").remove();
	});


	$("#submit").click(function() {
		var $row = $(this).closest("tr");
		var $text = $row.find("column1").text();
		alert(text);
	})


});
