<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todo List</title>
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
</head>

<body>
  <div class="todo">
    <div class="container">
      <header class="todo__header">
        <div class="overflow">
          <h1><span id="todaysDay">Day</span> Todo's</h1>
          <span id="todaysDate">Date</span>
        </div>
      </header>
      <div class="todo__input wrap">
        <form action="" id="form">
          <input type="text" id="todoInput" placeholder="Enter todo for the Day" />
          <button class="todo__btn">Add</button>
        </form>
      </div>
      <div class="todo__div">
        <ul class="todo__list wrap"></ul>
      </div>
    </div>
  </div>
</body>
<script src="./src/app.js"></script>

</html>

<!-- User friendly todo -->