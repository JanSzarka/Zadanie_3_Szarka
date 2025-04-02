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
              foreach ($qnaData as $element) {
                  echo '<div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        ' . $element['otazka'] . '
                                    </button>
                            </h2>
                        </div>';
                  echo '<div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        ' . $element['odpoved'] . '
                                    </button>
                            </h2>
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