<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"></style>
        <title>Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
      <div class="row">
        <br />
        <div class="col-md-7 col-sm-offset-1">
          <form>
            <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" id="username" />

              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" />

              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control" id="password2" />

              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" />

              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" />

              <div class="checkbox">
                <label>
                  <input type="checkbox" /> Librarian
                </label>
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-default">Sign Up</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </body>
</html>
