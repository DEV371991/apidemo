<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <style>
            .div{
                width: 350px;
                height: 400px;
                border: 1px solid;
                margin: 20px;
            }

            form{
                margin: 40px;
            }
            button{
                margin: 5px;
                
            }


        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="div">
                <form method="post" action="{{route('store')}}" >
                    @csrf
                    <h2>Register Form </h2>
                    <div><label>name</label></div>
                    <input type="text" name="name" placeholder="name">
                    <div><label>email</label></div>
                    <input type="text" name="email" placeholder="email">
                    <div><label>password</label></div>
                    <input type="password" name="password" placeholder="password">
                    <div><label>contact</label></div>
                    <input type="number" name="number" placeholder="contact">

                    <div><button type="submit">Submit</button></div>
                </form>
            </div>
             <br><br>
            <div class="div">
                
                <form method="post" action="{{route('show')}}" >
                    @csrf
                    <h2>Login Form </h2>
                    <div><label>name</label></div>
                    <input type="text" name="name" placeholder="name" >
                    <div><label>email</label></div>
                    <input type="text" name="email" placeholder="email">
                    <div><label>password</label></div>
                    <input type="password" name="password" placeholder="password">
                    <div><label>contact</label></div>
                    <input type="number" name="number" placeholder="contact">

                    <div><button type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>