<?php
include_once('bookModel.php');
$data = bookModel::getBooks();
print_r($data);