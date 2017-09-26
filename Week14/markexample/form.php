</head>
<body>
  <h1>Form Processing</h1>
  <?php if(!isset($_GET['msg'])) { ?>
  <form action="formprocess2.php" method="post">
    <input type="hidden" name="hiddenValue" value="its a secret" />
    <div>
      <label for="fname">First name: <input type="text" value="" id="fname" nam$
    </div>
    <div>
      <label for="lname">Last name: <input type="text" value="" id="lname" name$
    </div>
    <div>
      <span>Gender: <label for="male">Male: <input type="radio" value="m" id="m$
    </div>
    <div>
      <label for="title">Title: </label>
      <select name="title">
        <option value="Mr">Mr.</option>
        <option value="Mrs">Mrs.</option>
        <option value="Ms">Ms.</option>
        <option value="Dr">Dr.</option>
      </select>
    </div>
    <div>
      <span>Favorite drinks: </span>
      <label for="coffee">Coffee: <input type="checkbox" value="coffee" id="cof$
      <label for="tea">Tea: <input type="checkbox" value="tea" id="tea" name="d$
      <label for="water">Water: <input type="checkbox" value="water" id="water"$
      <label for="milk">Milk: <input type="checkbox" value="milk" id="milk" nam$
    </div>
    <div>
      <textarea name="moreinfo" placeholder="What else would you like us to kno$
    </div>
    <div>
      <input type="submit" value="Submit" name="submit" />
    </div>
  </form>
  <?php } else { ?>
  <p>You have a message from the server: <?php echo $_GET['msg']; ?>.</p>
  <?php } ?>
</body>
</html>