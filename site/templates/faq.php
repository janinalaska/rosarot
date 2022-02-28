<?php snippet('header') ?>

    <main class="noimg faq">
      <?= $page->text()->kt() ?>

        <!-- <button type="button" class="question">Question One</button>
        <div class="answer">
          This is an answer.
        </div> -->




    </main>


<?php snippet('footer') ?>

<!-- <script>
var coll = document.getElementsByClassName("question");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var answer = this.nextElementSibling;
    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
}
</script> -->

<script>
var coll = document.getElementsByTagName("h3");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var answer = this.nextElementSibling;
    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
}
</script>
