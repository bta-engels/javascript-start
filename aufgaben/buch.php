<?php require '../inc/header.html'; ?>

<div id="book"></div>

<script>
var divBook = document.getElementById('book'),
    table = document.createElement('table'),
	book = {
		"id": 1,
		"autor": "Umberto Eco",
		"title": "Der Name der Rose",
		"jahr": 1980,
		"preis": 20.00
	},
//    bookCopyByValue is copy of book
    bookCopyByValue = Object.assign({}, book),
    // or other method
//    bookCopyByValue = JSON.parse(JSON.stringify(book))
//    bookReferenceByValue is reference of book
    bookReferenceByValue = book,
    a = 1,
    b = a
    ;
b = 2
bookReferenceByValue.title = "Bin jetzt eine Referenz"
bookCopyByValue.title = "Und jetzt eine richtige  Kopie"

console.info("book", book)
console.info("bookCopyByValue", bookCopyByValue)
//console.info("book", book)
console.info("bookReferenceByValue", bookReferenceByValue)
console.info("a", a, "b", b)

for(key in book) {
	let tr = document.createElement('tr'),
		th = document.createElement('th'),
		td = document.createElement('td');

	th.innerText = key.toUpperCase();
    td.innerText = book[key];
    tr.appendChild(th);
	tr.appendChild(td);
    table.appendChild(tr);
}
table.className = "table";
divBook.appendChild(table);
</script>
<?php require '../inc/footer.html'; ?>
