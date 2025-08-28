<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #f9f9f9;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<h2>Contact Form</h2>
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Enter your name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Enter your email" required>

    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject" placeholder="Enter subject" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" placeholder="Write your message here..." required></textarea>

    <button type="submit">Submit</button>
</form>

</body>
</html>
