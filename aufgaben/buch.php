<?php require '../inc/header.html'; ?>

<div id="book"></div>

<script>
var divBook = document.getElementById('book'),
    table = document.createElement('table'),
	buch = {
		"id": 1,
		"autor": "Umberto Eco",
		"title": "Der Name der Rose",
		"Jahr": 1980,
		"preis": 20.00
	};

for(key in buch) {
	let tr = document.createElement('tr'),
		th = document.createElement('th'),
		td = document.createElement('td');

	th.innerText = key.toUpperCase();
    td.innerText = buch[key];
    tr.appendChild(th);
	tr.appendChild(td);
    table.appendChild(tr);
}
table.className = "table";
divBook.appendChild(table);
</script>
<?php require '../inc/footer.html'; ?>
