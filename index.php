<!DOCTYPE html>
<!-- ICS2O-Unit3-02-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Pyramid, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.orange-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of a Pyramid, with PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Pyramid, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="pyramid" />
      </div>
      <div class="page-content-formula">Formula</div>
      <br />
      <div class="page-content-formula">V = (L x W x H) / 3</div>
      <br />
      <div class="page-content">Please enter integers for dimensions:</div>
      <br />
      <!-- Simple Textfield for integers-->
      <form action="answer.php" method="GET">
        <span>Length:</span>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            name="length-of-pyramid"
            step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input"></label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <span>mm</span>
        <br />
        <span>Width:</span>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            name="width-of-pyramid"
            step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input"></label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <span>mm</span>
        <br />
        <span>Height:</span>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            name="height-of-pyramid"
            step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input"></label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <span>mm</span>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Calculate
        </button>
      </form>
      <br />
      <div class="page-content">
        <div name="volume"></div>
      </div>
    </main>
  </div>
</body>

</html>
