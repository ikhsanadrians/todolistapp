<?php

include "config.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body class="bg-white-100">
    <div class="container mt-[10px]">
        <div class="title justify-center mt-[50px] text-center">
            <!-- <h1 class="text-4xl font-bold items-center text-sky-500">Whats'up User</h1> -->
            <h2 class="text-3xl">let's Do Your Tasks!</h2>
        </div>
        <!-- button jquery -->
        <div class="button ml-[610px]">
            <span>
                <img src="addcircle.png" alt="add" id="button">
            </span>
            <!-- <p class=" -mx-[100px] text-slate-400" style="  user-select: none;">Click The Plus Button To Add New Task
            </p> -->
        </div>


        <!-- hide userinput first -->
        <div class="userinput " style="margin-left:350px">
            <div class="formandlabel border-2 border-black w-[550px] h-[400px] flex-col drop-shadow-lg">
                <form class="ml-[30px] mt-[50px]">
                    <textarea rows="10" cols="50"
                        class="border-black border-2 bg-slate-200 pl-[10px] pt-[10px]"></textarea><br>
                    <button type="submit" name="submit" class="border-2 border-black">Add Task</button>
                </form>

            </div>


        </div>





        <hr class="z-0">
        <div class="tasklist">
            <h3 class="text-center text-3xl font-bold">Task List</h3>
            <div class="flex-col ml-[30px]">

                <?php foreach($result as $fect) : ?>
                <div class="bg-slate-200 w-[600px] min-h-[90px] pl-[10px] pt-[10px] pb-[10px] justify-center drop-shadow-lg rounded-[4px]"
                    style="margin:0 auto; margin-bottom :10px;">
                    <div class="isi pr-[120px]">
                        <h1><?= $fect["date"]  ?></h1>
                        <p><?= $fect["task"]  ?></p>

                    </div>
                    <div class="tool" style="margin-left:-1px">
                        <a href="" class="text-red-500">Delete❌</a>
                        <a href="" class="text-green-500">Done👌</a>
                    </div>


                </div>

                <?php endforeach ?>



            </div>

        </div>
        <script src="app.js"></script>

</body>



</html>