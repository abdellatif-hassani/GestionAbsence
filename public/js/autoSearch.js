

function get_text_marques(event)
{
	var string = event.textContent;

	//fetch api

	fetch("public/biblio/marqueSearch.php", {

		method:"POST",

		body: JSON.stringify({
			search_query : string
		}),

		headers : {
			"Content-type" : "application/json; charset=UTF-8"
		}
	}).then(function(response){

		return response.json();

	}).then(function(responseData){

		document.getElementsByName('search_box_marques')[0].value = string;

		document.getElementById('search_marques_result').innerHTML = '';

	});

}



function get_text_produits(event)
{
	var string = event.textContent;

	//fetch api

	fetch("public/biblio/produitSearch.php", {

		method:"POST",

		body: JSON.stringify({
			search_query : string
		}),

		headers : {
			"Content-type" : "application/json; charset=UTF-8"
		}
	}).then(function(response){

		return response.json();

	}).then(function(responseData){

		document.getElementsByName('search_box_produits')[0].value = string;

		document.getElementById('search_produits_result').innerHTML = '';

	});

}


function get_text_produits_template_bar(event)
{
	var string = event.textContent;

	//fetch api

	fetch("public/biblio/produitSearch.php", {

		method:"POST",

		body: JSON.stringify({
			search_query : string
		}),

		headers : {
			"Content-type" : "application/json; charset=UTF-8"
		}
	}).then(function(response){

		return response.json();

	}).then(function(responseData){

		document.getElementsByName('search_box_produits_tempate')[0].value = string;

		document.getElementById('search_produits_result_template').innerHTML = '';

	});

}


function get_text_clients(event)
{
	var string = event.textContent;

	//fetch api

	fetch("public/biblio/clientSearch.php", {

		method:"POST",

		body: JSON.stringify({
			search_query : string
		}),

		headers : {
			"Content-type" : "application/json; charset=UTF-8"
		}
	}).then(function(response){

		return response.json();

	}).then(function(responseData){

		document.getElementsByName('search_box_clients')[0].value = string;

		document.getElementById('search_clients_result').innerHTML = '';

	});

}



function get_text_categories(event)
{
	var string = event.textContent;

	//fetch api

	fetch("public/biblio/categorieSearch.php", {

		method:"POST",

		body: JSON.stringify({
			search_query : string
		}),

		headers : {
			"Content-type" : "application/json; charset=UTF-8"
		}
	}).then(function(response){

		return response.json();

	}).then(function(responseData){

		document.getElementsByName('search_box_categories')[0].value = string;

		document.getElementById('search_categories_result').innerHTML = '';

	});

}



function load_marques(query)
{
	if(query.length > 1)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'public/biblio/marqueSearch.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text_marques(this)">'+response[count].post_title+'</a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">aucune marque</a>';
				}

				html += '</div>';

				document.getElementById('search_marques_result').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_marques_result').innerHTML = '';
	}
}



function load_produits(query)
{
	if(query.length > 1)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'public/biblio/produitSearch.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text_produits(this)">'+response[count].post_title+'</a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">aucune produit</a>';
				}

				html += '</div>';

				document.getElementById('search_produits_result').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_produits_result').innerHTML = '';
	}
}

function load_produits_templateBar(query)
{
	if(query.length > 1)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'public/biblio/produitSearch.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text_produits_template_bar(this)">'+response[count].post_title+'</a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">aucune produit</a>';
				}

				html += '</div>';

				document.getElementById('search_produits_result_template').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_produits_result_template').innerHTML = '';
	}
}



function load_clients(query)
{
	if(query.length > 1)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'public/biblio/clientSearch.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text_clients(this)">'+response[count].post_title+'</a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">aucune client</a>';
				}

				html += '</div>';

				document.getElementById('search_clients_result').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_clients_result').innerHTML = '';
	}
}




function load_categories(query)
{
	if(query.length > 1)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'public/biblio/categorieSearch.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text_categories(this)">'+response[count].post_title+'</a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">aucune categorie</a>';
				}

				html += '</div>';

				document.getElementById('search_categories_result').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_categories_result').innerHTML = '';
	}
}
