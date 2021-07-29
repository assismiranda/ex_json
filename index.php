<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalhando com Json</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Style the header */
    header {
      background-color: #666;
      padding: 30px;
      text-align: center;
      color: white;
    }

    /* Create two columns/boxes that floats next to each other */
    nav {
      float: left;
      width: 20%;
      min-height: 400px;
      /* only for demonstration, should be removed */
      background: #ccc;
      padding: 20px;
    }

    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }

    article {
      float: left;
      padding: 20px;
      width: 80%;
      background-color: #f1f1f1;
      min-height: 400px;
      /* only for demonstration, should be removed */
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the footer */
    footer {
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {

      nav,
      article {
        width: 100%;
        height: auto;
      }
    }
  </style>
</head>

<body>
  <header>
    <h2>Trabalhando com Json por meio de PHP e Javascript</h2>
  </header>
  <section>
    <nav>
      <ul>
        <li><a href="escreverJson_comPHP.php">Escrever no aquivo Json com PHP</a></li>
        <li><a href="lerJson_comPHP.php">Ler aquivo Json com PHP</a></li>
        <li><a href="lerJson_comJS.html">Ler aquivo Json com JS</a></li>
        <li><a href="cliente.html">Tabela Cliente com JSON</a></li>
      </ul>
    </nav>
    <article>
      <h2>Conceitos</h2>
      <p>JSON: <b>J</b>ava <b>S</b>cript <b>O</b>ject <b>Notation</b></p>
      <p>JSON é uma sintaxe para armazenamento e troca de dados</p>
      <p>JSON é um texto escrito com notação de objeto Javascript</p>
    </article>
  </section>
  <footer>
    Disciplina: Programação Web <br>
    Professor: Márcio Assis<br>
    @profmarcioassis
  </footer>
</body>

</html>