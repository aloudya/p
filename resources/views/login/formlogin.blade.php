<!DOCTYPE html>
<html lang="en" class="formLogin">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Persuratan</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="shocked.jpg" width="30" height="30" class="d-inline-block align-top" alt="isagi"> Aloudya
        </a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column min-vh-100 min-wh-100">
                <div class="d-flex flex-grow-1 justify-content-center align-items-center">
                    <div class="col-lg-4">
                        <div class="card border-radius-1">
                            <div class="card-header">
                                <h1 class="text-center fw-bold">Form Login</h1>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="fw-bold">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan username@gmail.com">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="fw-bold">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                                    <br>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>