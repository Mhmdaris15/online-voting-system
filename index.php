<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <h1 class="text-white text-center p-3">Online Voting System</h1>
    <div class="bg-info">
        <h2 class="text-center py-3">Login</h2>
        <div class="container text-center">
            <form action="">
                <div class="mb-3">
                    <input type="text" placeholder="Input Your Username here" class="form-control w-50 m-auto"
                        name="username" required>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Input Your WhatsApp Number here" class="form-control w-50 m-auto"
                        name="whatsapp-number" maxlength="10" minlength="10" required>
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Input Your Password here" class="form-control w-50 m-auto"
                        name="password">
                </div>
                <div class="mb-3">
                    <select class="form-control w-50 m-auto">
                        <option value="Group">Group</option>
                        <option value="Voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger text-center">Submit</button>
                <p class="py-3">Don't have an Account? <a href="">Register here!</a></p>
            </form>
        </div>
    </div>
</body>

</html>