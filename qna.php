<?php
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
          <?php
           include_once "classes/QnA.php";
           use otazkyodpovede\QnA;

          $qna = new QnA();
          $qnaData = $qna -> getQna();

          if (!empty($qnaData)) {
              echo '<div class="accordion" id="accordion">';
              foreach ($qnaData as $index => $element) {
                  $id = 'colapse' . $index;
                  echo '<div class="accordion-item">
                          <h2 class="accordion-header" id="heading' . $index . '">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $id . '" aria-expanded="false" aria-controls="' . $id . '">
                                  ' . $element['otazka'] . '
                              </button>
                          </h2>
                            <div id="' . $id . '" class="accordion-collapse collapse" aria-labelledby="heading' . $index . '" data-bs-parent="#accordion">
                                  <div class="accordion-body">
                                      ' . $element['odpoved'] . '
                                  </div>
                              </div>
                          </div>';
              }
              echo "</div>";
          } else {
              echo "<p> No Qna </p>";
          }
          ?>
  </main>
  <?php
include_once "parts/footer.php"
?>