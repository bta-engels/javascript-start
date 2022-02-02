<?php require '../inc/header.html'; ?>
<h1>Todo API</h1>
<div class="row min-vh-100">
    <div class="col min-vh-100 m-2 p-2">
        <!-- Liste aller Todos -->
    </div>
    <div class="col min-vh-100 m-2 p-2">
        <!-- Todo Einzelansicht per Click auf ein Todo in der Liste -->
    </div>
</div>
<script>
/*
* Hole Todos per ajax-request von Todo-API
*/
//var divTodos = document.querySelector('.row .col:last-child')
// das selbe per jquery
const apiURL = 'http://laravel-shop.loc/api';
var $divTodos = $('.row .col:first-child'),
	$divTodo = $('.row .col:last-child');

$.get(apiURL + "/todos", function (data) {
	console.info(data);
});
</script>
<style>
    .col {
        border: 1px solid #999;
    }
    .movies {
        padding-left: 1.0rem;
    }
    .movies li {
        font-size: 0.6rem;
        margin-left: 0;
    }
</style>

<?php require '../inc/footer.html'; ?>

