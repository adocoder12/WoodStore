<?php 
  $css = 'form.css';
  include '../header/header.php'; 
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
      <form class="form">
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
            <option value="pyyntö">yhteydenottopyyntö</option>
          </select>
          <!-- <div class="select-arrow">▾</div> -->
          </div>
          <div class="palautte">
            <textarea
              rows="3"
              cols="50"
              class="input txt-area"
              placeholder="Anna palautetta"
            ></textarea>
          </div>
        </div>
        <div class="checkbox-wrapper">
          <input type="checkbox" class="ui-checkbox" />
          <p>Haluan tilata Puutarhaliike Neilikan uutiskirjeen</p>
        </div>
        <button>lähettää</button>
      </form>
    </div>
  </div>
  <?php  
      include '../footer/footer.php'; 
      ?>
