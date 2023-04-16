<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5 mb-4 mb-lg-0">

          <div class="block-7">
            <h3 class="footer-heading mb-4">Öffnungszeiten:</h3>
            <ul>
                <li>Montag: 08:30–12:00 / 13:30–18:00</li>
                <li>Dienstag: 08:30–12:00 / 13:30–18:00</li>
                <li>Mittwoch: 08:30–12:00</li>
                <li>Donnerstag: 08:30–12:00 / 13:30–18:00</li>
                <li>Freitag: 08:30–12:00 / 13:30–18:00</li>
                <li>Samstag: 08:30–14:00</li>
            </ul>
          </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">Schnelle Links</h3>
          <ul class="list-unstyled">
            <li><a href="{{ route('shop') }}">Alle Produkte</a></li>
            @foreach ($categories as $category)
            <li> <a href="{{ route('shop', ['cat_id' => $category->id]) }}">{{ Ucfirst($category->title) }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Kontaktinformation</h3>
            <ul class="list-unstyled">
              <li class="address">Apotheke Frutigen
                  Musaab Kassam
                  Obere Bahnhofstrasse 5
                  3714 Frutigen</li>
              <li class="phone">Telefon : +41 33 671 12 65</li>
                  <li class="phone">Fax : +41 33 535 41 51</li>
              <li class="email"> info@apotheke-frutigen.ch</li>
            </ul>
          </div>


        </div>
      </div>

    </div>
  </footer>
