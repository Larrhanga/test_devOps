<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Homepage View</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #2c3e50;
            color: #fff;
            padding: 0.5em;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #34495e;
            color: #fff;
            text-align: center;
            padding: 1em;
            /*position: fixed; */
            margin-top:20%;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Laravel Website</h1>
    </header>
    
    <nav>
        <!-- Add navigation links if necessary -->
    </nav>

    <main>
        <section>
            <h2>About Us</h2>
            <p>This is the homepage of our website. Feel free to explore and learn more about us.</p>

            <form action="/example" method="POST">
                @method('PUT')
                @csrf
                <input type='text' alt='Name' placeholder='Name' >
                <br><br>
                <input type='text' alt='Name' placeholder='+212 777571278' >
                <br><br>
                <input type='submit' placeholder='Envoyer'>
            </form>
        </section>

        <section>
            
    </section>

        <!-- Add more sections or content as needed -->
    </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
