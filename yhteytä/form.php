<?php 
  $css = 'form.css';
  include '../header/header.php'; 
  require_once 'db_connection.php';
  require_once 'db_queries.php';

  // Create a connection object
  $conn = include 'db_connection.php';
  // Create a query object
  $dbQueries = new DBQueries($conn);

  // Assuming you have a form that submits data to the server
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $data = [
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'aihe' => $_POST['aihe'],
          'palautte' => $_POST['palautte'],
          'agree-uutiskirjeen' => $_POST['agree-uutiskirjeen'],
      ];

      // Call the insertData method from the query object
      if ($dbQueries->insertData('your_table', $data)) {
          echo "Data inserted successfully";
      } else {
          echo "Error inserting data";
      }
  }
  ?>

  <div class="container-form">
  <div class="meista">
      <h3 class="title">Meistä</h3>

       <p>Puutarhaliike Neilikka on vuonna 1990 perustettu puutarhanhoitoon ja huonekasveihin erikoistunut myymäläketju. Ensimmäinen myymälämme perustettiin Helsingin Fabianinkadulle, ja toukokuussa 1997 perustimme ketjun toisen myymälän Espooseen.</p>
       <p>

        Meiltä löydät kattavan valikoiman sisä- ja ulkokasveja sekä tietysti kaikki työkalut ja muut tarvikkeet niiden hoitoon. Osaava ja puutarhanhoidosta innostunut henkilökuntamme on aina valmiina auttamaan sinua valitsemaan juuri sinulle sopivimmat tuotteet.
      </p>
      </div>
    <div class="form-box">
      <form class="form" method="post">
        <span class="title">Ota yhteyttä</span>
        <div class="form-container">
          <div class="user-info">
            <span class="title-form">User</span>
            <input type="text" class="input" placeholder="nimi" />
            <input type="email" class="input" placeholder="Email" />
          </div>
          <div class="options-wraper">
          <label class="title-select" for="aihe">aihe</label>
          <select name="aihe" id="aihe">
            <option value="kysymys">kysymys tuotteista</option>
            <option value="tilaus">tilaus</option>
            <option value="yhteydenottopyyntö">yhteydenottopyyntö</option>
          </select>
          <!-- <div class="select-arrow">▾</div> -->
          </div>
          <div class="palautte">
            <textarea
              name="palautte"
              rows="3"
              cols="50"
              class="input txt-area"
              placeholder="Anna palautetta"
            ></textarea>
          </div>
        </div>
        <div class="checkbox-wrapper">
          <input name="agree-uutiskirjeen" type="checkbox" class="ui-checkbox" />
          <p>Haluan tilata Puutarhaliike Neilikan uutiskirjeen</p>
        </div>
        <button>lähettää</button>
      </form>
    </div>
  </div>
  <?php  
      include '../footer/footer.php'; 
      ?>
