<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMM.css">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

    <h1 class="select-plan-title">Select your plan to get started !!</h1>
    <section id="pricing">
        <div class="select-plan">
            <div class="row">
                <div class="col-md-6 price-col">
                <div class="card">
                    <div class="card-header">
                    <h3>Group Learning</h3>
                    </div>
                    <div class="card-body">
                    <h2>$20 / mo</h2>
                    <p>2 Classes Per Week</p>
                    <p>Interactive sessions</p>
                    <p>Reputed Professors</p>
                    <div class="d-grid">
                        <button class="btn btn-lg btn-outline-dark" type="button" onclick="window.location.href = 'group.php';">Sign Up</button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="col-md-6 price-col">
                <div class="card">
                    <div class="card-header">
                    <h3>Private Learning</h3>
                    </div>
                    <div class="card-body">
                    <h2>$49 / mo</h2>
                    <p>3 Classes Per Week</p>
                    <p>One on One Interaction</p>
                    <p>Learn new technologies at your Doorstep</p>
                    <div class="d-grid">
                        <button class="btn btn-lg btn-dark" type="button" onclick="window.location.href = 'private.php';">Sign Up</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>