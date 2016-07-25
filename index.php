
	<head>
<title>Login Screen</title>
<link rel='stylesheet' type='text/css' href='css/materialize.css'>
<link rel='stylesheet' type='text/css' href='css/materialize.min.css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
</style>
</head>

<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a href="http://fb.com/sushrut111">Raise a query</a></li>
        
      </ul>
    </div>
  </nav>
    <br><br>
<center>
    <form class="col s8" method='POST' action='login.php'>
      <div class="row">
        <div class="input-field col s8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label class="active" for="icon_prefix">Name</label>
        </div>
        <br>
        
        <br>
        <div class="input-field col s8">
          <i class="material-icons prefix">visibility_off</i>
          <input name="keyt" type="password" class="validate">
          <label class="active" for="icon_telephone">Key</label>
        </div>

      </div>
   <button class="btn waves-effect waves-light" type="submit" name="login">Submit
    <i class="material-icons right">send</i>
  </button>

    </form>
    </center>
