<?php
 $books = array();


 $mysqli = new mysqli('localhost', 'root', '', 'books');   // Подключаемся к базе данных


        if(mysqli_connect_errno()) {
            print_f('Соединение не установлено');   // Если выскакивает ошибка в подключении то выходим
            exit();
        }

        $mysqli->set_charset('utf8');  // Проверка на кирилицу

        $query = "Select * From News";  // Запрос и выбор из таблицы

        $result = $mysqli->query($query);
        $books = $result->fetch_all(MYSQLI_ASSOC); // Результат Массива, который берет все данные
        








//     array("bookname" => "HTML and CSS",
//             "author" => "Jon Duckett",
//             "price" => "17.19$",
//             "description" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium ad quia sit deserunt aut reiciendis quas odit, debitis animi, alias earum hic culpa corporis distinctio aliquam recusandae iste vitae.",
//             "image" => "HTMLandCSS_Duckett.jpg"),
//     array("bookname" => "HTML5",
//             "author" => "Matthew MacDonald",
//             "price" => "27.99$",
//             "description" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium ad quia sit deserunt aut reiciendis quas odit, debitis animi, alias earum hic culpa corporis distinctio aliquam recusandae iste vitae.",
//             "image" => "HTML5TheMissing_MacDonald.jpg"),
//     array("bookname" => "HTML5 Programmind",
//             "author" => "Elisabeth Robson",
//             "price" => "35.99$",
//             "description" => "HTML5 ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium ad quia sit deserunt aut reiciendis quas odit, debitis animi, alias earum hic culpa corporis distinctio aliquam recusandae iste vitae.",
//             "image" => "HeadFirstHTML5.jpg"),
//     array("bookname" => "JavaScript Programmind",
//             "author" => "Eric Freeman",
//             "price" => "37.50$",
//             "description" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium ad quia sit deserunt aut reiciendis quas odit, debitis animi, alias earum hic culpa corporis distinctio aliquam recusandae iste vitae.",
//             "image" => "HTMLandCSS_Duckett.jpg"),
//     array("bookname" => "CSS",
//             "author" => "Jon Duckett",
//             "price" => "99.99$",
//             "description" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium ad quia sit deserunt aut reiciendis quas odit, debitis animi, alias earum hic culpa corporis distinctio aliquam recusandae iste vitae.",
//             "image" => "HTMLandCSS_Duckett.jpg"));
         
?>